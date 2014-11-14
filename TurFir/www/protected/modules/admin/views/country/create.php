<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Country', 'url'=>array('index')),
);
?>

<h1>Create Country</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>