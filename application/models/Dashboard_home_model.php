<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Models
 */
class dashboard_home_model extends CI_Model {


	public function getFullTable (){
		$this->load->database('BridgeStreet');
		$sql = "SELECT id, bidID, address, specialRequests FROM ActiveRequests LIMIT 50";
		$res = $this->db->query($sql)->result_array();
		if($res){
			return $res;
		}
		else{
			return false;
		}
	}

}
?>