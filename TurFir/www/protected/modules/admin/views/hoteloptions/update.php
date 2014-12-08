<?php
/* @var $this HoteloptionsController */
/* @var $model Hoteloptions */

$this->breadcrumbs=array(
	'Hoteloptions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hoteloptions', 'url'=>array('index')),
	array('label'=>'Create Hoteloptions', 'url'=>array('create')),
	array('label'=>'View Hoteloptions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hoteloptions', 'url'=>array('admin')),
);
?>

<h1>Update Hoteloptions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>