<?php
$res=InsuranceController::allInsurance();
?>
<div >
<?
foreach($res as $key){
?>
    <?=$key->text?>
    <hr />
    <?}?>

</div>
