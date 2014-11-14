<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_order'); ?>
		<?php echo $form->textField($model,'id_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tourist_email'); ?>
		<?php echo $form->textField($model,'tourist_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tourist_name'); ?>
		<?php echo $form->textField($model,'tourist_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_tour'); ?>
		<?php echo $form->textField($model,'name_tour',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_country'); ?>
		<?php echo $form->textField($model,'name_country',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_hotel'); ?>
		<?php echo $form->textField($model,'name_hotel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_departure'); ?>
		<?php echo $form->textField($model,'date_departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_return'); ?>
		<?php echo $form->textField($model,'date_return'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_country'); ?>
		<?php echo $form->textField($model,'id_country'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->