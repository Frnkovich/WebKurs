<?php
  $res=ShareController::allShare();
?>

<div >
<?
foreach($res as $key){
?>
   
    <table>
   <caption><a href="/share/view/id_share/<?=$key->id_share?>"><h3><?=$key->name_share?></a></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images//share/<?=$key->id_share?><?=$key->image?>" width="200px" height="150px"/> </th>
    <th><?=$key->short_text?></th>
   </tr>
  </table>
    <hr />
    <?}?>

</div>