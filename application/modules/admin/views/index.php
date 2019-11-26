<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->esg->check_login();

if(empty($this->session->userdata(base_url().'_store')))
{
	$this->session->set_userdata(base_url().'_store', $this->store_model->get_store());
}

$this->load->view('templates'.DIRECTORY_SEPARATOR.$this->esg->get_esg('templates')['admin_template'].DIRECTORY_SEPARATOR.'index', $this->esg->get_esg());