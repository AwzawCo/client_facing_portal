<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metrics_model extends CI_Model{
	private $db_bs;
	private $db_sirva;
	public function __construct(){
		
		$this->db_bs = $this->load->database('BridgeStreet', TRUE);
		$this->db_sirva = $this->load->database('Sirva', TRUE);
		$this->db_regency = $this->load->database('Regency', TRUE);
	}
/*
	The information Active Leads table should just contain the following information:
		-BidID (as a number hash)
		-Timestamp
		-Locale
		-Move In
		-Move Out
		-Button to view Lead
*/

	public function buildActiveLeads(){
		//BRIDGESTREET
		$bs_res = $this->db_bs->query("SELECT id as leadID, bidID, timestamp, locale, moveIn, moveOut, 'BridgeStreet' as source FROM ActiveRequests WHERE status =1 ORDER BY id DESC LIMIT 20");
		//SIRVA
		$sirva_res = $this->db_sirva->query("SELECT id, reservationNum as leadID, timestamp, desiredLocation as locale, arrivalDate as moveIn, minimumStay as moveOut, 'Sirva' as source FROM ActiveRequests where status =1 ORDER BY id DESC LIMIT 20");
		$regency_res = $this->db_regency->query("SELECT id as leadID, address as locale, moveInDate as moveIn, moveOutDate as moveOut, 'Regency' as source FROM ActiveLead WHERE status=1");
		$data = array_merge($regency_res->result_array(),$bs_res->result_array(), $sirva_res->result_array());

		//$data = $sirva_res->result_array();
		return $data;
	}

/*
	The information Submitted Quotes table should just contain the following information:
		-BidID (as a number hash) [id]
		-Locale []
		-Move In
		-Move Out
		-Property Offered
		-Date Avaliable
		-Status
		-Reason
*/


	public function buildSubmittedQuotes($source = "bridgestreet"){
		switch ($source) {
			case 'bridgestreet':
				//If you modify this query, also change the columns in the config file
				$query = "SELECT
							s.id, a.locale, a.moveIn, a.moveOut, s.propertyName, s.dateAvailable,
								CASE
								WHEN s.status = 1 THEN 'Won'
								WHEN s.status = 2 THEN 'Lost'
								WHEN s.status = 3 THEN 'Request Lost'
								WHEN s.status = 4 THEN 'Confirmation Declined'
								WHEN s.status = 5 THEN 'Request Resubmitted'
								else s.status
								END as status,
								s.reason
							FROM SubmittedQuotes as s 
							LEFT JOIN ActiveRequests as a 
								on s.bidID = a.bidID 
							WHERE s.status > 0 AND 
							EXISTS (select * from ActiveRequests as ae WHERE ae.bidID = s.bidID ) 
							ORDER BY s.id DESC LIMIT 50";
				$data['res'] = $this->db_bs->query($query)->result_array();
				$data['cols'] = $this->config->item('bridgestreet','table_columns');
				break;

			case 'sirva':
				//SIRVA
				$sirva_res = $this->db_sirva->query("SELECT reservationID, propertyName as name, dateAvailable, minLeaseTerm, \"unknown\" as status from SubmittedBids where dateAvailable > \"2017-01-01\" order by id DESC LIMIT 50");
				$data['res'] = $sirva_res->result_array();
				$data['cols'] = $this->config->item('sirva','table_columns');
				break;
			
			case 'regency':
				return false;
			default:
				# code...
				break;
		}
		
		
		// $data = array_merge($bs_res->result_array(), $sirva_res->result_array());
		return $data;
	}

	public function markLeadAsInactive($id){
		$data = $this->db_regency->query("UPDATE ActiveLead set status=0 WHERE id=$id");
		return $data;
	}
}
?>