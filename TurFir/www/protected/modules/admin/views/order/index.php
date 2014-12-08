

<h1>Просмотр заказов</h1>

<?php //echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_order',
		'tourist_email',
		'tourist_name',
		'name_tour',
		'name_country',
		'name_hotel',
		'cost',
		'amount',
		'zpass'=> array(
		'name' => 'zpass',
		'value' => '($data->zpass ==1)? "Да":"Нет"',
		'filter' => array(1 => "Да", 0 => "Нет"),
		),
		'visa'=> array(
		'name' => 'visa',
		'value' => '($data->visa ==1)? "Да":"Нет"',
		'filter' => array(1 => "Да", 0 => "Нет"),
		),
		'alltour'=> array(
		'name' => 'alltour',
		'value' => '($data->alltour ==1)? "Да":"Нет"',
		'filter' => array(1 => "Да", 0 => "Нет"),
		),
		'allfood'=> array(
		'name' => 'allfood',
		'value' => '($data->allfood ==1)? "Да":"Нет"',
		'filter' => array(1 => "Да", 0 => "Нет"),
		),
		'apartment'=> array(
		'name' => 'apartment',
		'value' => '($data->apartment ==1)? "Да":"Нет"',
		'filter' => array(1 => "Да", 0 => "Нет"),
		),
		//'date',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
