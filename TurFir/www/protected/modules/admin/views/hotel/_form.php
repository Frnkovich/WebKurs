<?php
/* @var $this HotelController */
/* @var $model Hotel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hotel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_hotel'); ?>
		<?php echo $form->textField($model,'name_hotel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_text'); ?>
		<?php echo $form->textField($model,'short_text',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'short_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
        <?php $this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
 
 //������ � ������� ����� ������ ������
 'model'=>$model,
 
 //������� ����
 'attribute'=>'text',
 'height'=>'200px',
 'width'=>'100%',
 
 //����� ������ ��������� (Basic,Standart ��� Full)
 'toolbarSet'=>"Full",
 
 //���� � ����� ckeditor.php
 'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
 
//���� � ���������
 'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
) );?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotel_cost'); ?>
		<?php echo $form->textField($model,'hotel_cost'); ?>
		<?php echo $form->error($model,'hotel_cost'); ?>
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
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->