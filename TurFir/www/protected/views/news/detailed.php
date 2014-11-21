<?php
/* @var $this SiteController */
if(isset($_GET['id_news'])){
    $id_news = $_GET['id_news'];
$res=NewsController::viewNews($id_news);

//    echo $key->name;
//}
?>

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>
<?}?>