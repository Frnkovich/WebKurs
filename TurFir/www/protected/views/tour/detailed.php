<?php
/* @var $this SiteController */
if(isset($_GET['id_tour'])){
    $id_tour = $_GET['id_tour'];
$res=TourController::viewTour($id_tour);

?>

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>

<?}?>
