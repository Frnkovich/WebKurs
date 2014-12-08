<?php
/* @var $this TouroptionsController */
/* @var $model Touroptions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zpassport'); ?>
		<?php echo $form->textField($model,'zpassport'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visa'); ?>
		<?php echo $form->textField($model,'visa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alltour'); ?>
		<?php echo $form->textField($model,'alltour'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->