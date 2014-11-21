<?php
$res=PartnerController::allPartner();
?>

<div >
<?
foreach($res as $key){
?>
    <caption><a href=<?=$key->url?>><img src="/images/partner/<?=$key->id_partner?><?=$key->img?>" width="150px" height="100px"/></a></caption>
    <?}?>

</div>