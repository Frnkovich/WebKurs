<?php
  $res=CountryController::allCountry();
?>

<div >
<?
foreach($res as $key){
?>

    
   <table>
   <caption><a href="/country/view/id_country/<?=$key->id_country?>"><h3><?=$key->name?></a></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images/country/<?=$key->id_country?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>


</div>