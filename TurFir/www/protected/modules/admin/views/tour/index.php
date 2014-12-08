<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Добавление', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tour-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tour-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tour',
		'name_tour',
		'short_text',
		//'text',
		'tour_cost',
		'id_country' => array 
		(
			'name' => 'id_country',
			'value' => '$data->idCountry->name',
		),
		'visible' => array(
		'name' => 'visible',
		'value' => '($data->visible ==1)? "Доступно":"Скрыто"',
		'filter' => array(1 => "Доступно", 0 => "Скрыто"),
		),
		/*
		'image',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
