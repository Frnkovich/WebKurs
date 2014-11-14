<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Partner', 'url'=>array('index')),
);
?>

<h1>Create Partner</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>