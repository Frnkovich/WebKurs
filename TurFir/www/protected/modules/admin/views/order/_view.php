<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_order')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_order), array('view', 'id'=>$data->id_order)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tourist_email')); ?>:</b>
	<?php echo CHtml::encode($data->tourist_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tourist_name')); ?>:</b>
	<?php echo CHtml::encode($data->tourist_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_tour')); ?>:</b>
	<?php echo CHtml::encode($data->name_tour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_country')); ?>:</b>
	<?php echo CHtml::encode($data->name_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_hotel')); ?>:</b>
	<?php echo CHtml::encode($data->name_hotel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	*/ ?>

</div>