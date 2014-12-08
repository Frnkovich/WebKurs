<?php
/* @var $this HotelController */
/* @var $model Hotel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); 
$res=HotelController::allTour();
$tour = CHtml::listData($res, 'id_tour', 'name_tour');
?>

	<div class="row">
		<?php echo $form->label($model,'id_hotel'); ?>
		<?php echo $form->textField($model,'id_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_hotel'); ?>
		<?php echo $form->textField($model,'name_hotel',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hotel_cost'); ?>
		<?php echo $form->textField($model,'hotel_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tour'); ?>
		<?php echo CHtml::activedropDownList($model,'id_tour', $tour); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visible'); ?>
		<?php echo $form->dropdownlist($model,'visible', array('' => '', '1' => "Доступно", '0' => 'Скрыто') ); ?>
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