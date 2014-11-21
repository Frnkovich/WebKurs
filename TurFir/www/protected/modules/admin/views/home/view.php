<?php
/* @var $this HomeController */
/* @var $model Home */

$this->breadcrumbs=array(
	'Homes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Home', 'url'=>array('index')),
	array('label'=>'Create Home', 'url'=>array('create')),
	array('label'=>'Update Home', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Home', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Home', 'url'=>array('admin')),
);
?>

<h1>View Home #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'text',
	),
)); ?>