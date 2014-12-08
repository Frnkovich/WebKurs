<?php
/* @var $this HoteloptionsController */
/* @var $model Hoteloptions */

$this->breadcrumbs=array(
	'Hoteloptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hoteloptions', 'url'=>array('index')),
	array('label'=>'Manage Hoteloptions', 'url'=>array('admin')),
);
?>

<h1>Create Hoteloptions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>