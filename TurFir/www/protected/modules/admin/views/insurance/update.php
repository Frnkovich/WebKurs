<?php
/* @var $this InsuranceController */
/* @var $model Insurance */

$this->breadcrumbs=array(
	'Insurances'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Insurance', 'url'=>array('create')),
	array('label'=>'View Insurance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Insurance', 'url'=>array('index')),
);
?>

<h1>Update Insurance <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>