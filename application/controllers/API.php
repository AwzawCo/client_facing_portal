<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class API extends CI_Controller {

	 public function __construct() 
    {
        parent::__construct();
        $this->load->Library('session');
        $this->load->model("auth_model");
        $this->load->model("login_model");
    }

	public function query()
	{
		$post = $this->input->post();

		if(null == $token = isset($post['token']) ? $post['token']:null){
			return $this->buildResponse("Authentication Failure",0,"No token provided. Please provide a valid token in the POST parameter 'token'");
		}
		sleep(1);
		if($token != "slkdjfvbnnoiurvhq34cvhqloeuirvhaqlo384f=="){
			return $this->buildResponse("Invalid Token",0,"Please submit a valid token");
		}
		// if(!$this->auth_model->authenticate($token)){
		// 	$this->buildResponse("Authentication Failure",0,"That token is not valid");
		// }
		if(null == $q = isset($post['query']) ? $post['query']:null){
			return $this->buildResponse("Invalid Request",0,"No query provided. Please provide a valid query in the POST parameter 'query'");
		}
		if(!preg_match('/SELECT/i', $q)){
			// return $this->buildResponse("Invalid SQL",0,"Your query MUST be a valid 'SELECT' statement.");
			return $this->buildResponse("Invalid SQL",0,var_dump($q));
		}
		$this->load->database('BridgeStreet');
		$res = $this->db->query($q);
		if(!$res){
			return $this->buildResponse("SQL Error",0,var_dump($res));
		}
		$data = $res->result_array();
		return $this->buildResponse("Success!",1,$data);
	}

	private function buildResponse($message, $status, $payload =""){
		$res['message'] = $message;
		$res['status'] = $status;
		$res['payload'] = $payload;
		$data['res'] = json_encode($res);
		return $this->load->view('API/response',$data);
	}
}
