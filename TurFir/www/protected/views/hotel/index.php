<?php
  $res=HotelController::allHotel();
  CHtml::normalizeUrl(array()); 
?>

<div >
<?
foreach($res as $key){
?>
  
   <table>
   <caption> <h3> <? echo Chtml::link($key->name_hotel, array('hotel/view/', 'id_hotel'=>$key->id_hotel)); ?></caption></h3>
   <tr></h3></tr>
   <tr>
    <th><img src="<?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>

</div>


