<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('index')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>