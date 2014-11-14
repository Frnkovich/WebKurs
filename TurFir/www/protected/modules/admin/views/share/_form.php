<?php
/* @var $this ShareController */
/* @var $model Share */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'share-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_share'); ?>
		<?php echo $form->textField($model,'name_share',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_share'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_text'); ?>
		<?php echo $form->textField($model,'short_text',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'short_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share_date'); ?>
		<?php echo $form->textField($model,'share_date'); ?>
		<?php echo $form->error($model,'share_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
		<?php echo $form->error($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
		<?php echo $form->error($model,'visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->