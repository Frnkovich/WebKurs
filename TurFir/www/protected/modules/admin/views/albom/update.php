<?php
/* @var $this AlbomController */
/* @var $model Albom */

$this->breadcrumbs=array(
	'Alboms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Список изображений', 'url'=>array('index')),
);
?>

<h1>Редактирование альбома <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>