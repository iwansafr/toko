<?php defined('BASEPATH') OR exit('No direct script access allowed');

$store_id = @intval($this->session->userdata(base_url().'_store')['id']);
$suplier_id = @intval($_GET['suplier_id']);

$form = new zea();

$form->init('edit');
$form->setTable('product');
$form->setId(@intval($_GET['id']));

if(!empty($store_id))
{
	$form->addInput('store_id','static');
	$form->setValue('store_id',$store_id);
}

$form->addInput('suplier_id','dropdown');
$form->setLabel('suplier_id','suplier');
if(!empty($suplier_id))
{
	$form->tableOptions('suplier_id','suplier','id','name','id = '.$suplier_id);
	$form->setSelected('suplier_id',$suplier_id);
}else{
	$form->tableOptions('suplier_id','suplier','id','name','store_id = '.$store_id);
}

$form->addInput('title','text');
$form->addInput('code','text');

$form->addInput('description','textarea');

$form->addInput('cat_ids','multiselect');
$form->setMultiSelect('cat_ids','product_cat','id,par_id,title');
$form->setHelp('cat_ids','ctrl + click to multiselect');
$form->setLabel('cat_ids','category');

$form->addInput('image','file');
$form->setAccept('image', '.jpg,.jpeg,.png');
$form->addInput('images','files');
$form->setAccept('images', '.jpg,.jpeg,.png');
$form->setAttribute('images','multiple');

$form->startCollapse('image','Gallery');
$form->endCollapse('images');
$form->setCollapse('image',TRUE);

$form->addInput('price','text');
$form->setType('price','number');
$form->addInput('qty','text');
$form->setType('qty','number');
$form->addInput('discount','text');
$form->setType('discount','number');

$form->startCollapse('price','Detail');
$form->endCollapse('discount');
$form->setCollapse('price',TRUE);

$form->addInput('publish','checkbox');

$form->form();