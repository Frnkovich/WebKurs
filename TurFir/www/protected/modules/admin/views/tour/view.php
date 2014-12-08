<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->id_tour,
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Редактирование', 'url'=>array('update', 'id'=>$model->id_tour)),
	array('label'=>'Удаление', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tour),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Просмотр #<?php echo $model->id_tour; ?></h1>

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
