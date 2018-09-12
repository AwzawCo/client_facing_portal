<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 public function __construct() 
    {
        parent::__construct();
        $this->load->Library('session');
        $this->load->model("auth_model");
    }

	public function index(){
    	redirect("dashboard/home");
    }

	public function createLead($offset = 0)
	{
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded CreateLead");
		$this->load->model('lead_insert');
		$this->load->library('table');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database('Regency');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		// $this->form_validation->set_rules('username', 'Username', 'callback_username_check');

        if ($this->form_validation->run() == FALSE){
                $this->load->template('dashboard_create_lead');
        }
        else{
        		$this->lead_insert->insert_lead();
                $this->load->template('form_success');
        }
	}

    public function profile()
	{
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded Profile");
		$this->load->model("users_model");
		$this->load->model('lead_insert');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database('Regency');
        //$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//$this->form_validation->set_rules('signature', 'Signature', 'trim');

		$username = $this->auth_model->getUsername($token);
        $data['email'] = $this->auth_model->getEmail($token);
        $data['signature'] = $this->users_model->getSignature($username);
		$data['body'] = (isset($_SESSION["message"]) ? $_SESSION["message"] :"" );

        if ($this->form_validation->run() == FALSE){
				$this->load->template('dashboard_profile',$data);
			    $this->session->set_flashdata("message","");

        }
        else{
				$this->session->set_flashdata("message","Profile Updated!");
        		$this->lead_insert->updateProfile($data);
        		redirect('dashboard/profile');
        }

	}

	public function ActiveLeads(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded ActiveLeads");
		$this->load->model('metrics_model');
		$data['res'] = json_encode($this->metrics_model->buildActiveLeads());
		$this->load->template('dashboard_active_leads', $data);
	}

	public function home(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		// $this->load->model("users_model");
		// $this->load->model("query_model");
		// l("Loaded Dashboard Home.");
		// $data['name'] = $this->users_model->getName($this->auth_model->getUsername($token));
		// $history = $this->query_model->leadsVsBids(30);
		// $today = $this->query_model->getTodaysData();
		// $data['activeLeadsToday'] = $today[0];
		// $data['bidsSubmittedToday'] = $today[1];
		// $data['bidsWonToday'] = $today[2];
		//$data['raw'] = $history[0];
		//$data['buckets'] = $history[1];
		//$data['morris'] = json_encode($history[2]);
		$this->load->template('dashboard_active_leads');
	}

	public function markLeadAsInactive(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$get = $this->input->get();
		if(!isset($get['id'])){
			redirect('dashboard/createBid');
		}
		else{
			$this->load->model("metrics_model");
			$this->metrics_model->markLeadAsInactive($get['id']);
		}
		
		redirect('dashboard/ActiveLeads');
	}
}
