<?php
/* @var $this HoteloptionsController */
/* @var $data Hoteloptions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hotel')); ?>:</b>
	<?php echo CHtml::encode($data->id_hotel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allfood')); ?>:</b>
	<?php echo CHtml::encode($data->allfood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartment')); ?>:</b>
	<?php echo CHtml::encode($data->apartment); ?>
	<br />


</div>