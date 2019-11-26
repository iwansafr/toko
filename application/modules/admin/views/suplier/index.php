<?php defined('BASEPATH') OR exit('No direct script access allowed');

$store_id = @intval($this->session->userdata(base_url().'_store')['id']);

$form = new zea();

$form->init('edit');
$form->setTable('suplier');

$form->setHeading(button('<i class="fa fa-plus"></i>',base_url('admin/suplier/'),'warning'));
$form->setId(@intval($_GET['id']));
$is_root = is_root();
if($is_root)
{
	$form->addInput('store_id','dropdown');
	$form->setLabel('store_id','store');
	$form->tableOptions('store_id','store','id','title');
}else{
	$form->addInput('store_id','static');
	$form->setValue('store_id', $store_id);
}
$form->addInput('name','text');
$form->addInput('address','textarea');
$form->addInput('phone','text');
$form->setType('phone','phone');


$form2 = new zea();

$form2->init('roll');
$form2->setTable('suplier');

if(!empty($store_id))
{
	$form2->setWhere('store_id = '.$store_id);
}
$form2->search();
$form2->setNumbering(true);
$form2->addinput('id','hidden');
if($is_root)
{
	$form2->addInput('store_id','dropdown');
	$form2->tableOptions('store_id','store','id','title');
	$form2->setLabel('store_id','store');
	$form2->setAttribute('store_id','disabled');
}
$form2->addInput('name','plaintext');
$form2->addInput('phone','plaintext');
$form2->setDelete(true);
$form2->setEdit(true);
$form2->setEditLink(base_url('admin/suplier/?id='),'id');
$form2->setUrl('admin/suplier/clear_list');

?>
<div class="row">
	<div class="col-md-3">
		<?php $form->form();?>
	</div>
	<div class="col-md-9">
		<?php $form2->form();?>
	</div>
</div>