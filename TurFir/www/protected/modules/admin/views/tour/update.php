<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->id_tour=>array('view','id'=>$model->id_tour),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Tour', 'url'=>array('create')),
	array('label'=>'View Tour', 'url'=>array('view', 'id'=>$model->id_tour)),
	array('label'=>'Manage Tour', 'url'=>array('index')),
);
?>

<h1>Update Tour <?php echo $model->id_tour; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>