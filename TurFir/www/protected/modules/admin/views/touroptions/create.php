<?php
/* @var $this TouroptionsController */
/* @var $model Touroptions */

$this->breadcrumbs=array(
	'Touroptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Touroptions', 'url'=>array('index')),
	array('label'=>'Manage Touroptions', 'url'=>array('admin')),
);
?>

<h1>Create Touroptions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>