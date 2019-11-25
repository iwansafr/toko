<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$this->load->view('store/list');
}else{
	$store_id = $this->store_model->get_store_id();
	$this->load->view('store/edit',['id'=>$store_id]);
}