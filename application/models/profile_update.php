<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_insert extends CI_Model
{
	function insert_into_db()
	{

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
	'budget' => $_POST['budget'],
	'numBedrooms' => $_POST['numBedrooms'],
	'numBathrooms' => $_POST['numBathrooms'],
	'numParking' => $_POST['numParking'],
	'numPets' => $_POST['numPets'],
	'typeWeightBreed' => $_POST['typeWeightBreed'],
	'specialRequest' => $_POST['specialRequest'],
	'localPhone' => isset($_POST['localPhone']),
	'housekeeping' => isset($_POST['housekeeping']),
	'vipPackage' => isset($_POST['vipPackage']),
	'starterPackage' => isset($_POST['starterPackage']),
	'asianPackage' => isset($_POST['asian']),
	'applePackage' => isset($_POST['apple']),

	);

	// var_dump($data);
	$this->db->insert('ActiveLead', $data);
	}
}


// "INSERT INTO ActiveLead VALUES('$typeHousingRequest','$contactName','$email','$phone','$clientName','$state','$address','$moveInDate','$moveOutDate','$numBedrooms','$bathrooms','$parking','$numPets','$typeWeightBreed','$specialRequest','$airConditioning','$highSpeedInternet','$carParking','$tv')");

// array(19) { ["typeHousingRequest"]=> string(9) "Immediate" ["contactName"]=> string(17) "Marcos Y Chabolla" ["email"]=> string(25) "Marcos.Chabolla@gmail.com" ["phone"]=> string(10) "9493514046" ["clientName"]=> string(7) "markers" ["companyName"]=> string(12) "JadeSoftware" ["state"]=> string(10) "California" ["address"]=> string(16) "4862 Lori Ann Ln" ["moveInDate"]=> string(10) "07/02/1993" ["moveOutDate"]=> string(10) "07/05/1993" ["hosting"]=> string(1) "1" ["bathrooms"]=> string(1) "1" ["parking"]=> string(1) "2" ["numPets"]=> string(1) "0" ["typeWeightBreed"]=> string(17) "Marcos Y Chabolla" ["specialRequest"]=> string(50) " dildo " ["airConditioning"]=> string(1) "1" ["highSpeedInternet"]=> string(1) "1" ["ci_session"]=> string(40) "a3e9dfdee7e6264ee86c082072079bd018e4fc58" }


?>