
<?php
$res=TourController::allTour();
?>

<div >
<?
foreach($res as $key){
?>
  
   <table >
   <h3>
   <? 
       CHtml::normalizeUrl(array()); 
      echo Chtml::link($key->name_tour, array('tour/view/', 'id_tour'=>$key->id_tour));  
   ?>
   <tr></h3></tr>
   <tr>
    <th><img src="/images/tour/<?=$key->id_tour?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th  ><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>


</div>

