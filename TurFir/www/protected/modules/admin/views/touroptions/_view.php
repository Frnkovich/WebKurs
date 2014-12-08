<?php
/* @var $this TouroptionsController */
/* @var $data Touroptions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tour')); ?>:</b>
	<?php echo CHtml::encode($data->id_tour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zpassport')); ?>:</b>
	<?php echo CHtml::encode($data->zpassport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visa')); ?>:</b>
	<?php echo CHtml::encode($data->visa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alltour')); ?>:</b>
	<?php echo CHtml::encode($data->alltour); ?>
	<br />


</div>