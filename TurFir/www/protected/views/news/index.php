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
   <table>
   <caption><a href="/news/view/id_news/<?=$key->id_news?>"><h3><?=$key->name?></a></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images/news/<?=$key->id_news?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>

</div>




    