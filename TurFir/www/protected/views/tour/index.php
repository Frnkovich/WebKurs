<?php
$res=TourController::allTour();
?>

<div >
<?
foreach($res as $key){
?>

    <a href="/tour/view/id_tour/<?=$key->id_tour?>"><h3><?=$key->name_tour?></a> </h3>
      <p>   
      <strong><?=$key->short_text?></strong> </p> 
    <img src="<?=$key->image?>" width="200px" height="150px"/>
     
     <hr />
  
    <?}?>

</div>