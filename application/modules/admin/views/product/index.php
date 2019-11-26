<?php defined('BASEPATH') OR exit('No direct script access allowed');

$store_id = @intval($this->session->userdata(base_url().'_store')['id']);
$form = new zea();

$form->setHeading(button('<i class="fa fa-plus"></i> product',base_url('admin/product/edit'),'warning'));
$form->init('roll');
$form->setTable('product');
$form->setId(@intval($_GET['id']));

$form->search();
$form->setNumbering(true);
$form->addInput('id','hidden');
if(is_root())
{
	$form->addInput('store_id','dropdown');
	$form->tableOptions('store_id','store','id','title');
	$form->setAttribute('store_id','disabled');
	$form->setLabel('store_id','store');
}

$form->addInput('suplier_id','dropdown');
$form->setLabel('suplier_id','suplier');
$form->tableOptions('suplier_id','suplier','id','name','store_id = '.$store_id);
$form->setAttribute('suplier_id','disabled');

$form->addInput('title','plaintext');
$form->addInput('code','plaintext');

$form->addInput('price','plaintext');
$form->setMoney('price');
$form->addInput('qty','plaintext');
$form->addInput('discount','plaintext');

$form->addInput('publish','checkbox');

$form->setEdit(true);
$form->setDelete(true);
$form->setUrl('admin/product/clear_list');

$form->form();