<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Insurances'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Create Insurance', 'url'=>array('create')),
	array('label'=>'Update Insurance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Insurance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Insurance', 'url'=>array('index')),
);
?>

<h1>View Insurance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'text',
		'visible',
	),
)); ?>
