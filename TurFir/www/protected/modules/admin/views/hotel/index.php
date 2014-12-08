<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Hotel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hotel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список отелей</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hotel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_hotel',
		'name_hotel',
		'short_text',
		//'text',
		'type',
		'hotel_cost',
		'visible' => array(
		'name' => 'visible',
		'value' => '($data->visible ==1)? "Доступно":"Скрыто"',
		'filter' => array(1 => "Доступно", 0 => "Скрыто"),
		),
		'id_tour' => array 
		(
			'name' => 'id_tour',
			'value' => '$data->idTour->name_tour',
		),
		
		//'image',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
