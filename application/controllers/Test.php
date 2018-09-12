<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is a TEST CONTROLLER!

class Test extends CI_Controller {
	 public function __construct() 
    {
        parent::__construct();
        $this->load->Library('session');
        $this->load->model('auth_model');
    }

	public function testpage(){
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$data['body'] = "";
		$this->load->view('test_view',$data);
	}
}