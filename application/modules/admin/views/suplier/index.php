<?php defined('BASEPATH') OR exit('No direct script access allowed');

$store_id = $this->store_model->get_store_id();

$form = new zea();

$form->init('edit');
$form->setTable('suplier');

$form->setId(@intval($_GET['id']));
$form->addInput('store_id','static');
$form->setValue('store_id', $store_id);
$form->addInput('name','text');
$form->addInput('address','textarea');
$form->addInput('phone','text');
$form->setType('phone','phone');


$form2 = new zea();

$form2->init('roll');
$form2->setTable('suplier');

$form2->setWhere('store_id = '.$store_id);
$form2->search();
$form2->setNumbering(true);
$form2->addinput('id','hidden');
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