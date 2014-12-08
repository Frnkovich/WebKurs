<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->id_hotel,
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Редактирование', 'url'=>array('update', 'id'=>$model->id_hotel)),
	array('label'=>'Удаление', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hotel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Просмотр #<?php echo $model->id_hotel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hotel',
		'name_hotel',
		'short_text',
		'text',
		'type',
		'hotel_cost',
		'id_tour',
		'visible',
		'image',
	),
)); ?>
