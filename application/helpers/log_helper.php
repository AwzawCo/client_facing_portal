<?php

if(!function_exists('l'))
{
	//This is the LOG function. Gets the username and the current route and the message and logs it under the DEV log level.
	function l($str)
	{
		$CI =& get_instance();
		$CI->load->model("auth_model");
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		$un = $CI->auth_model->getUsername($token);
		$msg = $un.":".uri_string()." -> ".$str;
		log_message("DEV", $msg);
	}
}

?>