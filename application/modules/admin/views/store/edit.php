<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();

$form->setTable('store');
$form->init('edit');
$form->setId($id);
if(!is_root())
{
	$store_id = @intval($this->session->userdata(base_url().'_store')['id']);
	$form->setId($store_id);
}

$form->addInput('title','text');
$form->addInput('description','textarea');
$form->addInput('address','textarea');
$form->addInput('phone','text');
$form->setType('phone','number');
$form->addInput('email','text');
$form->setType('email','email');

$form->form();
if(empty($id))
{
	if(!empty($form->insert_id)){
		$this->store_model->save($form->insert_id);
	}
}