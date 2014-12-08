<?php
/* @var $this TouroptionsController */
/* @var $model Touroptions */

$this->breadcrumbs=array(
	'Touroptions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Touroptions', 'url'=>array('index')),
	array('label'=>'Create Touroptions', 'url'=>array('create')),
	array('label'=>'Update Touroptions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Touroptions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Touroptions', 'url'=>array('admin')),
);
?>

<h1>View Touroptions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_tour',
		'zpassport',
		'visa',
		'alltour',
	),
)); ?>
