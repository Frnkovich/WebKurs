<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->id_hotel=>array('view','id'=>$model->id_hotel),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id_hotel)),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>Редактирование <?php echo $model->id_hotel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>