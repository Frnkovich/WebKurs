<?php
/* @var $this HotelController */
/* @var $data Hotel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hotel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hotel), array('view', 'id'=>$data->id_hotel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_hotel')); ?>:</b>
	<?php echo CHtml::encode($data->name_hotel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_text')); ?>:</b>
	<?php echo CHtml::encode($data->short_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hotel_cost')); ?>:</b>
	<?php echo CHtml::encode($data->hotel_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tour')); ?>:</b>
	<?php echo CHtml::encode($data->id_tour); ?>
	<br />
 
	<b><?php echo CHtml::encode($data->getAttributeLabel('visible')); ?>:</b>
	<?php echo CHtml::encode($data->visible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />



</div>