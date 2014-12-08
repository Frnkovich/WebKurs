<?php
/* @var $this HomeController */
/* @var $model Home */

$this->breadcrumbs=array(
	'Homes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Добавление</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>