<?php
  $res=ShareController::allShare();
?>

<div >
<?
foreach($res as $key){
?>
    <a href="/share/view/id_share/<?=$key->id_share?>"><h3><?=$key->name_share?></a></h3>
    <p><strong><?=$key->short_text?></strong></p> 
    <img src="<?=$key->image?>" width="200px" height="150px"/>
    <hr />
    <?}?>

</div>