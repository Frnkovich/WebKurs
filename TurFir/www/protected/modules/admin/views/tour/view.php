<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->id_tour,
);

$this->menu=array(
	array('label'=>'List Tour', 'url'=>array('index')),
	array('label'=>'Create Tour', 'url'=>array('create')),
	array('label'=>'Update Tour', 'url'=>array('update', 'id'=>$model->id_tour)),
	array('label'=>'Delete Tour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tour),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tour', 'url'=>array('admin')),
);
?>

<h1>View Tour #<?php echo $model->id_tour; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tour',
		'name_tour',
		'short_text',
		'text',
		'tour_cost',
		'id_country',
		'visible',
		'image',
	),
)); ?>
