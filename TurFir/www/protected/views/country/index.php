<?php
  $res=CountryController::allCountry();
?>

<div >
<?
foreach($res as $key){
?>
    <a href="/country/view/id_country/<?=$key->id_country?>"><h3><?=$key->name?></a></h3>
    <p><strong><?=$key->short_text?></strong></p> 
    <img src="<?=$key->image?>" width="200px" height="150px"/>
    <hr />
    <?}?>

</div>