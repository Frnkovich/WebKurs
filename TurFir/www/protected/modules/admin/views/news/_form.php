<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">


<?php     
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'news-form',
    'enableAjaxValidation'=>false,
    'method' => 'post',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
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
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
		<?php echo $form->error($model,'visible'); ?>
	</div>

 <div class="row">
		<?php echo $form->labelEx($model,'date_create'); ?>
		<?php echo $form->textField($model,'date_create'); ?>
		<?php echo $form->error($model,'date_create'); ?>
       
<?php echo $form->error($model,'date_create'); ?>
	</div>
    
    
    <div class="row">
    	<?php echo $form->labelEx($model,'image'); ?>
    	<?php echo $form->fileField($model, 'image'); ?>
    	<?php echo $form->error($model,'image'); ?>
    </div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->