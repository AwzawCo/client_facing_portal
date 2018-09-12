<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Models
 */
class auth_model extends CI_Model {

	public function createToken($data){
		$data->expire_at = time() + (60*60); //Token expires after one hour of inactivity
		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
		$output = openssl_encrypt(json_encode($data), 'AES-256-CBC', $this->config->item('encryption_key'), 0, $iv);
		$output = base64_encode($output).":".base64_encode($iv);
		return $output;
	}

	public function parseToken($token){
		$this->load->Library('session');
		$parts = explode(":", $token);
		if(count($parts)<2){
			return false;
		}
		$data = base64_decode($parts[0]);
		$iv = base64_decode($parts[1]);
		$decoded = openssl_decrypt($data, 'AES-256-CBC', $this->config->item("encryption_key"), 0, $iv);
		if($decoded){
			$data = json_decode($decoded);
			if($data->expire_at > time()){
				$newToken = $this->createToken($data);
				$this->session->set_userdata('token',$newToken);
				return $data;
			}
			else{
				unset($_SESSION['token']);
				$this->session->set_flashdata("message","Your session has expired, please log in again");
				redirect();
			}
		}
		else{
			unset($_SESSION['token']);
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
	}

	/*
		Authenticate will take the session token an extract out the user information
	*/
	public function authenticate ($token){
		return $this->parseToken($token) ? true : false;
	}

	public function getUsername ($token){
		$data = $this->parseToken($token);
		if(isset($data->username)){
			return $data->username;
		}
		else
			return NULL;
	}

	public function getEmail ($token){
		$data = $this->parseToken($token);
		if(isset($data->email)){
			return $data->email;
		}
		else
			return "email not found!";
	}

	// public function changePassword($token){
		
	// }

	public function createAPIToken($data){
		$data->expire_at = time() + (60*60); //Token expires after one hour of inactivity
		$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
		$output = openssl_encrypt(json_encode($data), 'AES-256-CBC', $this->config->item('encryption_key'), 0, $iv);
		$output = base64_encode($output).":".base64_encode($iv);
		return $output;
	}

	public function generatePassword($length = 9, $add_dashes = false, $available_sets = 'luds'){
		$sets = array();

		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '23456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';

		$all = '';
		$password = '';
		
		foreach($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for($i = 0; $i < $length - count($sets); $i++)
			$password .= $all[array_rand($all)];
		$password = str_shuffle($password);
		if(!$add_dashes)
			return $password;
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while(strlen($password) > $dash_len)
		{
			$dash_str .= substr($password, 0, $dash_len) . '-';
			$password = substr($password, $dash_len);
		}
		$dash_str .= $password;
		return $dash_str;
	}
}

?>