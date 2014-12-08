<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->name=>array('view','id'=>$model->id_news),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id_news)),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Редактирование <?php echo $model->id_news; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>