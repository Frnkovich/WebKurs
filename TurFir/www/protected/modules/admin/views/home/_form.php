<?php
/* @var $this HomeController */
/* @var $model Home */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'home-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->