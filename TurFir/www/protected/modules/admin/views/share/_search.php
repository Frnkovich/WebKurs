<?php
/* @var $this ShareController */
/* @var $model Share */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_share'); ?>
		<?php echo $form->textField($model,'id_share'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_share'); ?>
		<?php echo $form->textField($model,'name_share',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'short_text'); ?>
		<?php echo $form->textField($model,'short_text',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'share_date'); ?>
		<?php echo $form->textField($model,'share_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->