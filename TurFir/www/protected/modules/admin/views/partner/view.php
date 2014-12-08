<?php
/* @var $this PartnerController */
/* @var $model Partner */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Редактирование', 'url'=>array('update', 'id'=>$model->id_partner)),
	array('label'=>'Удаление', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_partner),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Список', 'url'=>array('index')),
);
?>

<h1>View Partner #<?php echo $model->id_partner; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_partner',
		'name',
		'url',
		'img',
        'visible',
	),
)); ?>
