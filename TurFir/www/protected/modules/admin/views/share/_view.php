<?php
/* @var $this ShareController */
/* @var $data Share */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_share')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_share), array('view', 'id'=>$data->id_share)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_share')); ?>:</b>
	<?php echo CHtml::encode($data->name_share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_text')); ?>:</b>
	<?php echo CHtml::encode($data->short_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_date')); ?>:</b>
	<?php echo CHtml::encode($data->share_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tour')); ?>:</b>
	<?php echo CHtml::encode($data->id_tour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visible')); ?>:</b>
	<?php echo CHtml::encode($data->visible); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	*/ ?>

</div>