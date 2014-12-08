<?php
/* @var $this AlbomcController */
/* @var $model Albomc */

$this->breadcrumbs=array(
	'Albomcs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Albomc', 'url'=>array('index')),
	array('label'=>'Create Albomc', 'url'=>array('create')),
	array('label'=>'View Albomc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Albomc', 'url'=>array('admin')),
);
?>

<h1>Update Albomc <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>