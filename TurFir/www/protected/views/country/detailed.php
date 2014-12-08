    
<?php
/* @var $this SiteController */
if(isset($_GET['id_country'])){
    $id_country = $_GET['id_country'];
$res=CountryController::viewCountry($id_country);
$pic=CountryController::viewPicture($id_country);
?>
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
    
    <?foreach($pic as $k){?>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/albomc/<?=$k->id?><?=$k->img?>" alt="1img1" title="<?=$k->description?>" id="wows1_1" width="300px" height="341px"/></li>
        <?}?>
	</ul></div>
	
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>


</div>

<?}?>




