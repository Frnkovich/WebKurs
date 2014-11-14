<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tourist_email'); ?>
		<?php echo $form->textField($model,'tourist_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tourist_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tourist_name'); ?>
		<?php echo $form->textField($model,'tourist_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tourist_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_tour'); ?>
		<?php echo $form->textField($model,'name_tour',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_country'); ?>
		<?php echo $form->textField($model,'name_country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_hotel'); ?>
		<?php echo $form->textField($model,'name_hotel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_departure'); ?>
		<?php echo $form->textField($model,'date_departure'); ?>
		<?php echo $form->error($model,'date_departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_return'); ?>
		<?php echo $form->textField($model,'date_return'); ?>
		<?php echo $form->error($model,'date_return'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
		<?php echo $form->error($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_country'); ?>
		<?php echo $form->textField($model,'id_country'); ?>
		<?php echo $form->error($model,'id_country'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->