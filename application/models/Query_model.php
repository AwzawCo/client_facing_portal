<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class query_model extends CI_Model{
	private $db_bs;
	private $db_sirva;
	private $db_regency;
	public function __construct(){
		
		$this->db_bs = $this->load->database('BridgeStreet', TRUE);
		$this->db_sirva = $this->load->database('Sirva', TRUE);
		$this->db_regency = $this->load->database('Regency', TRUE);
		date_default_timezone_set ( "America/Los_Angeles" );
	}

	public function select($address){
		$this->load->database();
		if(!$address){
			return "BAD SHIT";
		}
		else{
			$query = $this->db->query('SELECT * FROM SubmittedQuotes WHERE propertyAddress ="'.$address.'"');
			$myRental = $query->result_array();
			return $myRental;
	 
		}
	}

	public function getLeadDetails($id=null,$source=null){

		if(!$id){
			return false;
		}

		if($source == "Regency"){

			$res = $this->db_regency->query("SELECT  numBedrooms, moveInDate, moveOutDate, address, numBathrooms, numPets, typeWeightBreed, specialRequest FROM ActiveLead WHERE id=$id");

			$res = $res->result_array()[0];
			$res['id'] = $id;
			return $res;
		}

		if($source == "BridgeStreet"){
			$res = $this->db_bs->query("SELECT  numStudios, numOneBedroom, numTwoBedroom, numThreeBedroom, moveIn, moveOut, locale, LOS, amenities, specialRequests FROM ActiveRequests WHERE id=$id");
			//$dump = $res->result_array();
			$res = $res->result_array()[0];
			$res['unitSize'] = '';
			// $unitSize = ($res['numStudios']=="1") ? "studio ":" ".($res['numOneBedroom']=="1") ? "one bedroom ":" ".($res['numTwoBedroom']=="1") ? "two bedroom ":" ".($res['numThreeBedroom']=="1") ? "three bedroom ":" ";
			if($res['numStudios'])	$res['unitSize'] = 'Studio ';
			if($res['numOneBedroom'])	$res['unitSize'] = $res['unitSize'] . 'One Bedroom ';
			if($res['numTwoBedroom'])	$res['unitSize'] = $res['unitSize'] . 'Two Bedroom ';
			if($res['numThreeBedroom']) $res['unitSize'] = $res['unitSize'] . 'Three Bedroom ';
			//var_dump($res);
			return $res;
		}

		if($source == "Sirva"){
			$res = $this->db_sirva->query("SELECT  unitSize, reservationNum, arrivalDate, minimumStay, numOccupants, desiredLocation, pets, typeWeightBreed, specialRequests FROM ActiveRequests WHERE reservationNum=$id");//id or fuckin reservationNum
			$res = $res->result_array()[0];
			return $res;
		}

	}

	/*
		Get Bid History:
		@params:
			$days - number of days of history to find
			$less - TRUE to return less data, FALSE to return entire rows
	*/

	public function leadsVsBids($days=null, $less=TRUE){
		// date_default_timezone_set ( "America/Los_Angeles" );
		$today = strtotime("tomorrow")-1; //I know it looks weird but it works dammit
		try {
		
		} catch (Exception $e) {
			return false;
		}
		if(!$days){
			return false;
		}
		try {
			$bids = $this->db_bs->query("SELECT timestamp FROM SubmittedQuotes WHERE timestamp > \"2017-09-01 00:00:00.0\" AND DATEDIFF(FROM_UNIXTIME($today),timestamp) < $days AND status=1 ORDER BY timestamp DESC");
			$leads = $this->db_bs->query("SELECT timestamp FROM ActiveRequests WHERE timestamp > \"2017-09-01 00:00:00.0\" and DATEDIFF(FROM_UNIXTIME($today),timestamp) < $days ORDER BY timestamp DESC");
			$sirvaLeads = $this->db_sirva->query("SELECT timestamp FROM ActiveRequests WHERE timestamp > \"2017-09-01 00:00:00.0\" and DATEDIFF(FROM_UNIXTIME($today),timestamp) < $days ORDER BY timestamp DESC");
		} catch (Exception $e) {
			return false;

		}
		$bids = $bids->result_array();
		$leads = $leads->result_array();
		$sirvaLeads = $sirvaLeads->result_array();
		$bids_bucket = array_fill(0, $days, 0);
		$leads_bucket = array_fill(0, $days, 0);
		$sirva_bucket = array_fill(0, $days, 0);
		//$cummulative = 0;
		for ($i=0; $i < sizeof($bids); $i++) { 
			//$bids[$i] = strtotime($bids[$i]['timestamp']);
			$bids[$i]['days'] = floor(($today - strtotime($bids[$i]['timestamp']))/(60*60*24));
			$bids_bucket[$bids[$i]['days']]++;
		}
		for ($i=0; $i < sizeof($leads); $i++) { 
			//$bids[$i] = strtotime($bids[$i]['timestamp']);
			$leads[$i]['days'] = floor(($today - strtotime($leads[$i]['timestamp']))/(60*60*24));
			$leads_bucket[$leads[$i]['days']]++;
		}
		for ($i=0; $i < sizeof($sirvaLeads); $i++) { 
			//$bids[$i] = strtotime($bids[$i]['timestamp']);
			$sirvaLeads[$i]['days'] = floor(($today - strtotime($sirvaLeads[$i]['timestamp']))/(60*60*24));
			$sirva_bucket[$sirvaLeads[$i]['days']]++;
		}

		$j = 0;
		$morris['element'] = "leadsVsBids";
		for ($i=0; $i < $days; $i++) { 
			if(date("N",$today-(60*60*24*($days-$i-1))) >5){
				continue;
			}
			$data[$j]['daysAgo'] = date("F j, Y",$today-(60*60*24*($days-$i-1)));
			$data[$j]['bids'] = $bids_bucket[$days-$i-1];
			$data[$j]['leads'] = $leads_bucket[$days-$i-1];
			$data[$j]['sirva_leads'] = $sirva_bucket[$days-$i-1];
			$j++;
		}
		$morris['data'] = $data;
		$morris['xkey'] = 'daysAgo';
		$morris['ykeys'] = array(0=>"leads",1=>"sirva_leads",2=>"bids");
		$morris['labels'] = array(0=>"Bridgestreet Leads",1=>"Sirva Leads",2=>"Bids Won");
		//$morris['xLabelFormat'] = "function(x){return x+='sup'}";
		$morris['parseTime'] = false;
		$morris['behaveLikeLine'] = true;
		$morris['smooth'] = true;

		return array($bids, $bids_bucket, $morris);
	}

	public function getTodaysData(){
		$today = strtotime("tomorrow")-1; 
		// $bs_leads = $this->db_bs->query("SELECT COUNT(*) FROM ActiveRequests WHERE DATEDIFF(FROM_UNIXTIME($today),timestamp) < 1 ORDER BY timestamp DESC")->result_array()[0]["COUNT(*)"];
		// $regency_leads = $this->db_regency->query("SELECT COUNT(*) FROM ActiveLead WHERE DATEDIFF(FROM_UNIXTIME($today),timestamp) < 1 ORDER BY timestamp DESC")->result_array()[0]["COUNT(*)"];
		// $sirva_leads = $this->db_bs->query("SELECT COUNT(*) FROM ActiveRequests WHERE DATEDIFF(FROM_UNIXTIME($today),timestamp) < 1 ORDER BY timestamp DESC")->result_array()[0]["COUNT(*)"];
		$bs_leads = $this->db_bs->query("SELECT COUNT(*) FROM ActiveRequests where status=1")->result_array()[0]["COUNT(*)"];
		$regency_leads = $this->db_regency->query("SELECT COUNT(*) FROM ActiveLead where status=1")->result_array()[0]["COUNT(*)"];
		$sirva_leads = $this->db_sirva->query("SELECT COUNT(*) FROM ActiveRequests WHERE status=1")->result_array()[0]["COUNT(*)"];
		$bids = $this->db_bs->query("SELECT COUNT(*) FROM SubmittedQuotes WHERE DATEDIFF(FROM_UNIXTIME($today),timestamp) < 1 ORDER BY timestamp DESC")->result_array()[0]["COUNT(*)"];
		$won = $this->db_bs->query("SELECT COUNT(*) FROM SubmittedQuotes WHERE DATEDIFF(FROM_UNIXTIME($today),timestamp) < 30 AND status=1 ORDER BY timestamp DESC")->result_array()[0]["COUNT(*)"];
		
		return array($bs_leads+$regency_leads+$sirva_leads,$bids,$won);
	}



}
?>