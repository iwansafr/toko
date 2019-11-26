<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();
$form->setTable('product_cat');
$form->init('edit');

$form->addInput('par_id','dropdown');
$form->setLabel('par_id','Parent');
$form->tableOptions('par_id','product_cat','id','title');

$form->setHeading('category');
$form->addInput('title','text');

$form->addInput('image','file');
$form->addInput('description','textarea');
$form->addInput('publish','checkbox');
$form->setFormName('form_edit_cat');


$form2 = new zea();
$form2->setTable('product_cat');
$form2->init('roll');

$form2->search();
$form2->setNumbering(true);
$form2->addInput('id','plaintext');
$form2->addInput('par_id','dropdown');
$form2->setLabel('par_id','Parent');
$form2->tableOptions('par_id','product_cat','id','title');
$form2->setAttribute('par_id','disabled');

$form2->setUrl('admin/product/category_clear');
$form2->setEdit(true);
$form2->setDelete(true);
$form2->setHeading('category');
$form2->addInput('title','plaintext');

$form2->addInput('publish','checkbox');
$form2->setFormName('form_roll_cat');

?>
<div class="row">
	<div class="col-md-3">
		<?php $form->form();?>
	</div>	
	<div class="col-md-9">
		<?php $form2->form();?>
	</div>
</div>
<?php