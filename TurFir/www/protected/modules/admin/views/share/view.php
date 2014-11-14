<?php
/* @var $this ShareController */
/* @var $model Share */

$this->breadcrumbs=array(
	'Shares'=>array('index'),
	$model->id_share,
);

$this->menu=array(
	array('label'=>'Create Share', 'url'=>array('create')),
	array('label'=>'Update Share', 'url'=>array('update', 'id'=>$model->id_share)),
	array('label'=>'Delete Share', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_share),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Share', 'url'=>array('index')),
);
?>

<h1>View Share #<?php echo $model->id_share; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_share',
		'name_share',
		'short_text',
		'text',
		'share_date',
		'id_tour',
		'visible',
		'image',
	),
)); ?>
