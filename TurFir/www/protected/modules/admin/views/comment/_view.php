<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_comment), array('view', 'id'=>$data->id_comment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_text')); ?>:</b>
	<?php echo CHtml::encode($data->comment_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_date')); ?>:</b>
	<?php echo CHtml::encode($data->comment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tour')); ?>:</b>
	<?php echo CHtml::encode($data->id_tour); ?>
	<br />


</div>