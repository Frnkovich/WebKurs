<?php


//$this->pageTitle=Yii::app()->name;
$res=NewsController::allNews();

//    echo $key->name;
//}
?>

<div >
<?
foreach($res as $key){
?>
   <caption><a href="/news/view/id_news/<?=$key->id_news?>"><h3><?=$key->short_text?></a></caption>
   </h3>
    <?=$key->date_create?>
    <hr />
    <?}?>

</div>




    