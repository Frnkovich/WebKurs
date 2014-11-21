<?php
/* @var $this SiteController */
if(isset($_GET['id_hotel'])){
    $id_hotel = $_GET['id_hotel'];
$res=HotelController::viewHotel($id_hotel);

?>

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>

<?}?>

