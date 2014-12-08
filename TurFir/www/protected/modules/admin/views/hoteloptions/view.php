<?php
/* @var $this HoteloptionsController */
/* @var $model Hoteloptions */

$this->breadcrumbs=array(
	'Hoteloptions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hoteloptions', 'url'=>array('index')),
	array('label'=>'Create Hoteloptions', 'url'=>array('create')),
	array('label'=>'Update Hoteloptions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hoteloptions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hoteloptions', 'url'=>array('admin')),
);
?>

<h1>View Hoteloptions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_hotel',
		'allfood',
		'apartment',
	),
)); ?>
