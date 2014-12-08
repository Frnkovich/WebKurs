


<div >
<?php
$res=SiteController::allHome();
foreach($res as $key){
?>
<?=$key->text?>
    <hr />
    <?}?>
<?php
$res=SiteController::allShare();
CHtml::normalizeUrl(array());
$pic=SiteController::viewPicture();
$p=SiteController::viewPictureT();
?>


<h1> !!!!<?php echo Yii::t('main-ui', 'Внимание Акция');?>!!!!</h1>
<?
//foreach($res as $key){
?>
    <table>
   
   <caption> <h3> <? echo Chtml::link($res->name_share, array('share/view/', 'id_share'=>$res->id_share)); ?></caption>
   <tr></h3></tr>
   <tr>
    <th><img src="/images//share/<?=$res->id_share?><?=$res->image?>" width="200px" height="150px"/> </th>
    <th><?=$res->short_text?></th>
   </tr>
  </table>
    <hr />
    <?//}?>

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<?foreach($pic as $k){?>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/albomc/<?=$k->id?><?=$k->img?>" alt="1img1" title="<?=$k->description?>" id="wows1_1" width="300px" height="341px"/></li>
        <?}?>
        
		<?foreach($p as $k){?>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/albom/<?=$k->id?><?=$k->img?>" alt="1img1" title="<?=$k->description?>" id="wows1_1" width="300px" height="341px"/></li>
        <?}?>
	</ul></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

    
</div>