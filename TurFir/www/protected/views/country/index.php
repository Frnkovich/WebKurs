<?php
  $res=CountryController::allCountry();
  CHtml::normalizeUrl(array());   
?>
<div >
<?
foreach($res as $key){
?>

    
   <table>
   
   <caption> <h3> <? echo Chtml::link($key->name, array('country/view/', 'id_country'=>$key->id_country)); ?></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images/country/<?=$key->id_country?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>


</div>