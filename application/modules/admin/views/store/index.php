<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$this->load->view('store/list');
}else{
	$store_id = @intval($this->session->userdata(base_url().'_store')['id']);
	$this->load->view('store/edit',['id'=>$store_id]);
}