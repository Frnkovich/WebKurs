<?php
/* @var $this OrderController */

$this->breadcrumbs=array(
	'Order',
);
?>
<?
$res1=OrderController::allTour();
$res2=OrderController::allCountry();
$res3=OrderController::allHotel();
//$re=OrderController::viewTour($id_tour);

?>

<?


//$a = CHtml::listData($res, 'id', 'name_tour');
echo CHtml::dropDownList('drop', '', $res1);
echo CHtml::dropDownList('drop', '', $res2);
echo CHtml::dropDownList('drop', '', $res3);


            
echo CHtml::dropDownList('id_country','', $res2,
array(
'ajax' => array(
'type'=>'POST', //request type
'url'=>CController::createUrl('OrderController/getmodifications'), //url to call.
//Style: CController::createUrl('currentController/methodToCall')
'update'=>'#id_tour', //selector to update
//'data'=>'js:javascript statement' 
//leave out the data key to pass all form values through
))); 
 
//empty since it will be filled by the other dropdown
echo CHtml::dropDownList('id_tour','', array());

/*echo "<select>";
foreach($res as $key){
    echo "<option > $key->name_tour </option>";
    echo "</select>";
    }
*/
/*$myOptionsModel = Tour::model()->findAllByAttributes(
	array('visible'=>'1') // сортировка только для примера
);
$myOptions = CHtml::listData(
	$myOptionsModel,
	// поле модели $myOptionsModel, из которого будет взято value для <option>
	'id_tour', 
	// поле модели $myOptionsModel, из которого будет взята подпись для <option>
	'name_tour' 
);
echo $form->dropDownList($model, 'myField', $model->myOptions);
*/
?>



</div>