<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();

$form->setTable('store_staff');
$form->init('edit');
$form->setId($id);

$form->setHeading('Staff');

if(is_root())
{
	$form->addInput('store_id','dropdown');
	$form->tableOptions('store_id','store','id','title');
}else if(is_admin())
{
	$store_id = @intval($this->session->userdata(base_url().'_store')['id']);
	$form->addInput('store_id','static');
	$form->setValue('store_id',$store_id);
}

$form->addInput('name','text');
$form->addInput('gender','dropdown');
$form->setOptions('gender',['Perempuan','Laki-laki']);
$form->addInput('address','textarea');
$form->addInput('phone','text');
$form->setType('phone','number');

$form->form();
if(empty($id))
{
	if(!empty($form->insert_id)){
		$this->staff_model->save($form->insert_id);
	}
}