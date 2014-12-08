<?php
/* @var $this TouroptionsController */
/* @var $model Touroptions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'touroptions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
		<?php echo $form->error($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zpassport'); ?>
		<?php echo $form->textField($model,'zpassport'); ?>
		<?php echo $form->error($model,'zpassport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visa'); ?>
		<?php echo $form->textField($model,'visa'); ?>
		<?php echo $form->error($model,'visa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alltour'); ?>
		<?php echo $form->textField($model,'alltour'); ?>
		<?php echo $form->error($model,'alltour'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->