<?php
/* @var $this HomeController */
/* @var $model Home */

$this->breadcrumbs=array(
	'Homes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Home', 'url'=>array('index')),
	array('label'=>'Manage Home', 'url'=>array('admin')),
);
?>

<h1>Create Home</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>