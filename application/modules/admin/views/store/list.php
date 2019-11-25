<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();

$form->init('roll');
$form->setTable('store');

$form->setHeading(button('<i class="fa fa-plus"></i>', base_url('admin/store/edit')));
$form->search();

$form->addInput('id','plaintext');
$form->setLabel('id','action');
$form->setPlainText('id',
	'<div class="dropdown">
	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Action
	    <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	  	<li><a href="'.base_url('admin/store/edit/').'{id}"><i class="fa fa-pencil-alt"></i>Edit</a></li>
	    <li><a href="'.base_url('admin/store/detail/{id}').'"><i class="fa fa-search"></i>Detail</a></li>
	  </ul>
	</div>'
);

$form->setNumbering(true);
$form->addInput('title','plaintext');

$form->addInput('user_id','dropdown');
$form->setLabel('user_id','user');
$form->tableOptions('user_id','user','id','username');
$form->setAttribute('user_id','disabled');
$form->setUrl('admin/store/clear_list');


// $form->setEditLink(base_url().'admin/store/edit/','id');
// $form->setEdit(true);
$form->setDelete(true);

$form->form();