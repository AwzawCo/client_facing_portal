<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Models
 */
class login_model extends CI_Model {

	/*
		Validate will check a password against a username from the database.
		Upon success, a token will be generated and all their information will be encrypted with a secret key into the session cookie
		The token contains the following information (so far):
			-username
			-email
	*/
	public function validate ($post){
		$this->load->database('Regency');
		$nm = strtolower($post['username']);
		$res = $this->db->query("SELECT * FROM Users WHERE username='$nm';");
		$data = $res->row();
		if(!is_null($data)){
			if(password_verify($post['password'],$data->password)){
				unset($data->id,$data->password,$data->signature);
				return $this->auth_model->createToken($data);
				//The password matches the username, time to create the token.
				// $username = $data->username;
				// $email = isset($data->email) ? $data->email : "";
				// $fn = isset($data->email) ? $data->email : "";
				// $ln = isset($data->email) ? $data->email : "";
				// $delimiter ="*";
				// $output = openssl_encrypt($username.$delimiter.$email, 'AES-256-CBC', $this->config->item('encryption_key'));
				// return base64_encode($output);
			}
			else
				false;
		}
		else
			return false;
	}

	public function createAccount($post){
		$this->load->database('Regency');
		$nm = strtolower($post['username']);
		$em = $post['email'];
		$fn = $post['fname'];
		$ln = $post['lname'];
		$pw = password_hash($post['password1'], PASSWORD_DEFAULT);
		$query = "INSERT INTO Users (username, password, email, firstname, lastname) VALUES ('$nm','$pw','$em', '$fn', '$ln');";
		$res = $this->db->query($query);
		if($res){
			return true;
		}
		else
			return false;

	}

	public function uniqueUsername($name){
		$this->load->database('Regency');
		$name = strtolower($name);
		$res = $this->db->query("SELECT * FROM Users WHERE username='$name';");
		if($res->row()){
			return false;
		}
		else
			return true;
	}

	public function changePassword($uname ="", $oldPass="", $newPass=""){
		$this->load->database('Regency');
		$nm = strtolower($uname);
		$res = $this->db->query("SELECT * FROM Users WHERE username='$nm';");
		$data = $res->row();
		if(!is_null($data)){
			if(password_verify($oldPass,$data->password)){
				$pw = password_hash($newPass, PASSWORD_DEFAULT);
				$res = $this->db->query("UPDATE Users SET password='$pw' WHERE username='$nm';");
				if(!is_null($res)){
					return true;
				}
				else 
					return false;
			}
			return false;
		}
		return false;
	}

}
