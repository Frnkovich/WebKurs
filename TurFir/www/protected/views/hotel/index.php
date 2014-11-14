<?php
  $res=HotelController::allHotel();
?>

<div >
<?
foreach($res as $key){
?>
    <a href="/hotel/view/id_hotel/<?=$key->id_hotel?>"><h3><?=$key->name_hotel?></a></h3>
    <p><strong><?=$key->short_text?></strong></p> 
    <img src="<?=$key->image?>" width="200px" height="150px"/>
    <hr />
    <?}?>

</div>