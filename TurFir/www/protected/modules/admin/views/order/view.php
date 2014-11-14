<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_order,
);

$this->menu=array(
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_order),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('index')),
);
?>

<h1>View Order #<?php echo $model->id_order; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_order',
		'tourist_email',
		'tourist_name',
		'name_tour',
		'name_country',
		'name_hotel',
		'cost',
		'date_departure',
		'date_return',
		'id_user',
		'id_tour',
		'id_country',
	),
)); ?>
