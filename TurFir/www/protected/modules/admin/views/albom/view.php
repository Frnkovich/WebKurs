<?php
/* @var $this AlbomController */
/* @var $model Albom */

$this->breadcrumbs=array(
	'Alboms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>View Albom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'img',
		'description',
		'id_tour',
	),
)); ?>
