<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Tour', 'url'=>array('index')),
);
?>

<h1>Create Tour</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>