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
    <a href="/news/view/id_news/<?=$key->id_news?>"><h3><?=$key->name?></a></h3>
    <p><strong><?=$key->short_text?></strong></p>
    <img src="<?=$key->image?>" width="200px" height="150px"/> 
    <hr />
    <?}?>

</div>