<?php
$res=TourController::allTour();
?>

<div >
<?
foreach($res as $key){
?>
  
   <table >
   <caption><a href="/tour/view/id_tour/<?=$key->id_tour?>"><h3><?=$key->name_tour?></a></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images//tour/<?=$key->id_tour?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th  ><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>


</div>

