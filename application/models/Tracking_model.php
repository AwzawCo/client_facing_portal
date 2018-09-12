<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tracking_model extends CI_Model{
	private $db_bs;
	private $db_sirva;
	public function __construct(){
		$this->load->library("mongo_db");
	}

	public function insertObj($obj=NULL){
		return $this->mongo_db->insert($obj);
	}
}
?>