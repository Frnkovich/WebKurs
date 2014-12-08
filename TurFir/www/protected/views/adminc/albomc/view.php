<?php
/* @var $this AlbomcController */
/* @var $model Albomc */

$this->breadcrumbs=array(
	'Albomcs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Albomc', 'url'=>array('index')),
	array('label'=>'Create Albomc', 'url'=>array('create')),
	array('label'=>'Update Albomc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Albomc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Albomc', 'url'=>array('admin')),
);
?>

<h1>View Albomc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'img',
		'description',
		'id_country',
	),
)); ?>
