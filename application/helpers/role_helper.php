<?php defined('BASEPATH') OR exit('No direct script access allowed');

function is_staff()
{
	return check_user(4,'Staff');
}

function check_user($id = 0, $name = '')
{
	$data = @$_SESSION[base_url().'_logged_in'];
	if($data['id'] == $id){
		return true;
	}
	if($data['role'] == strtolower($name)){
		return true;
	}
	return false;
}