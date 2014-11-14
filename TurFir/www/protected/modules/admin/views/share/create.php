<?php
/* @var $this ShareController */
/* @var $model Share */

$this->breadcrumbs=array(
	'Shares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Share', 'url'=>array('index')),
);
?>

<h1>Create Share</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>