<?php
$res=SiteController::allContact();
?>
<div >
<?
foreach($res as $key){
?>
   <h3><?=$key->name?></h3>
    <?=$key->text?>
    <hr />
    <?}?>

</div>
