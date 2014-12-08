<?php
/* @var $this ShareController */
/* @var $model Share */

$this->breadcrumbs=array(
	'Shares'=>array('index'),
	$model->id_share=>array('view','id'=>$model->id_share),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id_share)),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Редактирование <?php echo $model->id_share; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>