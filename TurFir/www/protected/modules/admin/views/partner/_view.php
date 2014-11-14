<?php
/* @var $this PartnerController */
/* @var $data Partner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_partner')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_partner), array('view', 'id'=>$data->id_partner)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('visible')); ?>:</b>
	<?php echo CHtml::encode($data->visible); ?>
	<br />


</div>