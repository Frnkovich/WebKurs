<?php
/* @var $this HoteloptionsController */
/* @var $model Hoteloptions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoteloptions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_hotel'); ?>
		<?php echo $form->textField($model,'id_hotel'); ?>
		<?php echo $form->error($model,'id_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allfood'); ?>
		<?php echo $form->textField($model,'allfood'); ?>
		<?php echo $form->error($model,'allfood'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apartment'); ?>
		<?php echo $form->textField($model,'apartment'); ?>
		<?php echo $form->error($model,'apartment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->