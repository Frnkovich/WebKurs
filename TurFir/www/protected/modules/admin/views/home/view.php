<?php
/* @var $this HomeController */
/* @var $model Home */

$this->breadcrumbs=array(
	'Homes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Редактирование', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Просмотр #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
	),
)); ?>
