<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_order=>array('view','id'=>$model->id_order),
	'Update',
);

$this->menu=array(
	array('label'=>'View Order', 'url'=>array('view', 'id'=>$model->id_order)),
	array('label'=>'Manage Order', 'url'=>array('index')),
);
?>

<h1>Update Order <?php echo $model->id_order; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>