<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Hotel', 'url'=>array('index')),
);
?>

<h1>Create Hotel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>