<?php
  $res=ShareController::allShare();
  CHtml::normalizeUrl(array());
?>

<div >
<?
foreach($res as $key){
?>
   
    <table>
   <caption> <h3> <? echo Chtml::link($key->name_share, array('share/view/', 'id_share'=>$key->id_share)); ?></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images//share/<?=$key->id_share?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>

</div>