<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_order,
);

$this->menu=array(
	array('label'=>'Список заказов', 'url'=>array('index')),
	array('label'=>'Редактирование заказа', 'url'=>array('update', 'id'=>$model->id_order)),
);
?>

<h1>Просмотр заказа #<?php echo $model->id_order; ?></h1>

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
		'amount',
		'zpass',
		'visa',
		'alltour',
		'allfood',
		'apartment',
	),
)); ?>
