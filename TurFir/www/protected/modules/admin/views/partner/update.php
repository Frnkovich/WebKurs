<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->name=>array('view','id'=>$model->id_partner),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id_partner)),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Редактирование <?php echo $model->id_partner; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>