<?php
/* @var $this SiteController */
if(isset($_GET['id_share'])){
    $id_share = $_GET['id_share'];
$res=ShareController::viewShare($id_share);

?>

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>

<?}?>
