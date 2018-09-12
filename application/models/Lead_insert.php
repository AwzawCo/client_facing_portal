<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_insert extends CI_Model
{
	function insert_lead(){

		$this->load->database("Regency");
		$data = array(
		'typeHousingRequest' => $_POST['typeHousingRequest'],
		'contactName' => $_POST['contactName'],
		'email' => $_POST['email'],
		'emailSubject' => $_POST['subject'],
		'phoneNumber' => $_POST['phone'],
		'clientName' => $_POST['clientName'],
		'companyName' => $_POST['companyName'],
		'city' => $_POST['city'],	
		'state' => $_POST['state'],
		'country' => $_POST['country'],
		'zip' => $_POST['zip'],
		'extension' => $_POST['extension'],
		'address' => $_POST['address'],
		'address2' => $_POST['address2'],
		'moveInDate' => $_POST['moveInDate'],
		'moveOutDate' => $_POST['moveOutDate'],
		'NTV' => $_POST['NTV'],
		'NTVdate' => $_POST['NTVdate'],		
		'budget' => $_POST['budget'],
		'numBedrooms' => $_POST['numBedrooms'],
		'numBathrooms' => $_POST['numBathrooms'],
		'numParking' => $_POST['numParking'],
		'numPets' => $_POST['numPets'],
		'typeWeightBreed' => $_POST['typeWeightBreed'],
		'localPhone' => isset($_POST['localPhone']) ? "yes":"no",
		'housekeeping' => isset($_POST['housekeeping']) ? "yes":"no",
		'vipPackage' => isset($_POST['vipPackage']) ? "yes":"no",
		'starterPackage' => isset($_POST['starterPackage']) ? "yes":"no",
		'asianPackage' => isset($_POST['asian']) ? "yes":"no",
		'applePackage' => isset($_POST['apple']) ? "yes":"no",
		'specialRequest' => $_POST['specialRequest'],
		'status' => 1
		);

		// var_dump($data);
		$this->db->insert('Leads', $data);
		//$this->mail($data);
	}

	
	public function updateProfile($data){
		$signature = array(
               'signature' => $_POST['signature']
            );
		// $signature = $_POST['signature'];

		$this->db->where('email', $data['email']);
		$this->db->update('Users', $signature);

	}
}

?>