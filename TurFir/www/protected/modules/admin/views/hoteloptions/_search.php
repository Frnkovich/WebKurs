<?php
/* @var $this HoteloptionsController */
/* @var $model Hoteloptions */
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
		<?php echo $form->label($model,'id_hotel'); ?>
		<?php echo $form->textField($model,'id_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allfood'); ?>
		<?php echo $form->textField($model,'allfood'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apartment'); ?>
		<?php echo $form->textField($model,'apartment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->