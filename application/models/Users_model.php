<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Models
 */
class Users_model extends CI_Model {

	public function getSignature ($nm){
		$this->load->database('Regency');
		$res = $this->db->query("SELECT * FROM Users WHERE username='$nm';");
		$data = $res->row();
		if(!is_null($data)){
			return $data->signature;
		}
		else{
			return false;
		}
	}

	public function getName ($nm){
		$this->load->database('Regency');
		$res = $this->db->query("SELECT * FROM Users WHERE username='$nm';");
		$data = $res->row();
		if(!is_null($data)){
			return $data->firstname;
		}
		else{
			return false;
		}
	}

	public function getEmail ($nm){
		$this->load->database('Regency');
		$res = $this->db->query("SELECT * FROM Users WHERE username='$nm';");
		$data = $res->row();
		if(!is_null($data)){
			return $data->email;
		}
		else{
			return false;
		}
	}
}