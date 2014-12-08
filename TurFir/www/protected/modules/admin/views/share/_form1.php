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
    'method' => 'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); 
$res=ShareController::allTour();
$tour = CHtml::listData($res, 'id_tour', 'name_tour');
?>

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
		<?php $this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
 
 //Модель с которой будет связан виджет
 'model'=>$model,
 
 //Атрибут поля
 'attribute'=>'text',
 'height'=>'200px',
 'width'=>'100%',
 
 //набор кнопок редактора (Basic,Standart или Full)
 'toolbarSet'=>"Full",
 
 //Путь к файлу ckeditor.php
 'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
 
//Путь к редактору
 'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
) );?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share_date'); ?>
		<?php echo $form->textField($model,'share_date'); ?>
		<?php echo $form->error($model,'share_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tour'); ?>
		<?php echo CHtml::activedropDownList($model,'id_tour', $tour); ?>
		<?php echo $form->error($model,'id_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->dropdownlist($model,'visible', array('' => '', '1' => "Доступно", '0' => 'Скрыто') ); ?>
		<?php echo $form->error($model,'visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->