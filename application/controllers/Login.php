<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	 public function __construct() 
    {
        parent::__construct();
        $this->load->Library('session');
        $this->load->model("auth_model");
        $this->load->model("login_model");
    }

	public function index(){
		$data['body'] = (isset($_SESSION["message"]) ? $_SESSION["message"] :"" );
		$data['color'] = (isset($_SESSION["color"]) ? $_SESSION["color"] :"" );
		$data['username'] = (isset($_SESSION["username"]) ? $_SESSION["username"] :"" );
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if($this->auth_model->authenticate($token)) {
			redirect("/dashboard/home");
		} else
			$this->load->view('login_view',$data);
	}
	public function validate()
	{
		sleep(1);
		$post = $this->input->post();
		if(!isset($post['username']) || !isset($post['password'])){
			$data['body'] = "Bad credentials";
			$this->load->view('login_view', $data);
		}
		//Send the post info into LoginModel to check against the database
		$token = $this->login_model->validate($post);
		if($token){
			//If a token was generated that means that the user is logged in
			$this->session->set_userdata('token',$token);
			l("User has been Authenticated.");
			redirect();
		}
		else{
			//login failure.
			l("Login Failed");
			$this->session->set_flashdata("username",$post["username"]);
			$this->session->set_flashdata("message","Sorry, that didn't work");
			redirect();
		}
	}

	public function signup(){
		$data['body'] = (isset($_SESSION["message"]) ? $_SESSION["message"] :"" );
		$this->load->view("login_create_account", $data);
	}

	public function createAccount(){
		sleep(1);
		$post = $this->input->post();
		if($post['code'] != '23758'){
			$this->session->set_flashdata("message","Sorry, that account code is invalid");
			redirect('login/signup');
		}
		//Make sure all the fields made it through
		if(!isset($post['username']) ||
			!isset($post['password1']) ||
			!isset($post['email']) ||
			!isset($post['password2']) ||
			!isset($post['fname']) ||
			!isset($post['lname'])) {
			$data['body'] = "Please fill out all the fields";
			$this->load->view('login_create_account', $data);
		}
		//make sure the passwords match
		if($post['password1'] != $post['password2']){
			$data['body'] = "Passwords do not match.";
			$this->load->view('login_create_account', $data);
		}
		//Check to make sure that username isn't already taken
		if(!$this->login_model->uniqueUsername($post['username'])){
			$this->session->set_flashdata("message","Sorry, that username is already taken.");
			redirect('login/signup');
		}
		//okay we've validated everything let's hand it off to the model.
		if($this->login_model->createAccount($post)){
			$this->session->set_flashdata("message","Account Created! Please log in.");
			$this->session->set_flashdata("color","green");
			redirect();
		}
		else{
			$this->session->set_flashdata("message","Something went wrong, please try again");
			redirect('login/signup');
		}
	}

	public function forgotPassword(){
		$data['body'] = (isset($_SESSION["message"]) ? $_SESSION["message"] :"" );
		//$data['password'] = $this->auth_model->generatePassword(10,false,'lud');
		
		$message = "Someone be hacking";
		$to = "bijanagahi@yahoo.com";
		$header = "From:bijan@jadesoftware.io";
		$subject = "HAXXOR ALERT";
		mail($to, $subject, $message, $header);

		$this->load->view("login_forgot_password", $data);
	}

	public function sendPasswordReset(){
		$post = $this->input->post();
		if(!isset($post['uname']) || $post['uname'] == ""){
			$this->session->set_flashdata("message","No username provided.");
			redirect('login/forgotPassword');
		}
		$this->load->model("users_model");
		if(!$email = $this->users_model->getEmail($post['uname'])){
			$this->session->set_flashdata("message","Sorry, unable to find that user");
			redirect('login/forgotPassword');
		}
		else{
			$this->session->set_flashdata("message","Found ");
			redirect('login/forgotPassword');
		}
	}

	public function logout(){
		l("Logged out user");
		unset($_SESSION['token']);
		redirect();
	}
}
