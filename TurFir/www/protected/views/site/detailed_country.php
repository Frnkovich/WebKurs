<?php
/* @var $this SiteController */
if(isset($_GET['id_country'])){
    $id_country = $_GET['id_country'];
$res=SiteController::viewCountry($id_country);

?>

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>

<?}else{
    echo "=";}
    ?>