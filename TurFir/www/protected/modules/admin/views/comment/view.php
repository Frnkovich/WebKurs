<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id_comment,
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Update Comment', 'url'=>array('update', 'id'=>$model->id_comment)),
	array('label'=>'Delete Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_comment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comment', 'url'=>array('index')),
);
?>

<h1>View Comment #<?php echo $model->id_comment; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_comment',
		'comment_text',
		'comment_date',
		'user_name',
		'id_tour',
	),
)); ?>
