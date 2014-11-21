<?php
  $res=HotelController::allHotel();
?>

<div >
<?
foreach($res as $key){
?>
  
   <table>
   <caption><a href="/hotel/view/id_hotel/<?=$key->id_hotel?>"><h3><?=$key->name_hotel?></a></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="<?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>

</div>


