<?php
/* @var $this ShareController */
/* @var $model Share */

$this->breadcrumbs=array(
	'Shares'=>array('index'),
	$model->id_share=>array('view','id'=>$model->id_share),
	'Update',
);

$this->menu=array(
	array('label'=>'List Share', 'url'=>array('index')),
	array('label'=>'Create Share', 'url'=>array('create')),
	array('label'=>'View Share', 'url'=>array('view', 'id'=>$model->id_share)),
	array('label'=>'Manage Share', 'url'=>array('admin')),
);
?>

<h1>Update Share <?php echo $model->id_share; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>