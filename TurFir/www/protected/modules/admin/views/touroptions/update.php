<?php
/* @var $this TouroptionsController */
/* @var $model Touroptions */

$this->breadcrumbs=array(
	'Touroptions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Touroptions', 'url'=>array('index')),
	array('label'=>'Create Touroptions', 'url'=>array('create')),
	array('label'=>'View Touroptions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Touroptions', 'url'=>array('admin')),
);
?>

<h1>Update Touroptions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>