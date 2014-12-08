<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_order=>array('view','id'=>$model->id_order),
	'Update',
);

$this->menu=array(
	array('label'=>'Список заказов', 'url'=>array('index')),
	array('label'=>'Просмотр заказа', 'url'=>array('view', 'id'=>$model->id_order)),
);
?>

<h1>Update Order <?php echo $model->id_order; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>