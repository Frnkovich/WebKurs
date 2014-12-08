
 
<?php


//$this->pageTitle=Yii::app()->name;
$res=NewsController::allNews();
CHtml::normalizeUrl(array()); 
//    echo $key->name;
//}
?>

<div >
<?
foreach($res as $key){
?>
   <caption> <h3> <? echo Chtml::link($key->short_text, array('news/view/', 'id_news'=>$key->id_news)); ?></caption></h3>
    <?=$key->date_create?>
    <hr />
    <?}?>

</div>




    