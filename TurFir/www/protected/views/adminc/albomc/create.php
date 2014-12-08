<?php
/* @var $this AlbomcController */
/* @var $model Albomc */

$this->breadcrumbs=array(
	'Albomcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Albomc', 'url'=>array('index')),
	array('label'=>'Manage Albomc', 'url'=>array('admin')),
);
?>

<h1>Create Albomc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>