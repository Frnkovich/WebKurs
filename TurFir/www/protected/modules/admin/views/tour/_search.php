<?php
/* @var $this TourController */
/* @var $model Tour */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); 
$res=TourController::allTour();
$tour = CHtml::listData($res, 'id_country', 'name');
?>

	<div class="row">
		<?php echo $form->label($model,'id_tour'); ?>
		<?php echo $form->textField($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_tour'); ?>
		<?php echo $form->textField($model,'name_tour',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'tour_cost'); ?>
		<?php echo $form->textField($model,'tour_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_country'); ?>
		<?php echo CHtml::activedropDownList($model,'id_country', $tour); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visible'); ?>
		<?php echo $form->dropdownlist($model,'visible', array('' => '', '1' => "Доступно", '0' => 'Скрыто') ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textArea($model,'image',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->