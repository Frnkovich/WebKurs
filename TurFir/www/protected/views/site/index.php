<?php
$res=SiteController::allShare();
?>


<div >
<h1>!!!!Внимание Акция!!!!</h1>
<?
//foreach($res as $key){
?>
    <table>
   <caption><a href="/share/view/id_share/<?=$res->id_share?>"><h3><?=$res->name_share?></a></caption>
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
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/images/2turciya.jpg" alt="2Turciya" title="2Turciya" id="wows1_0"/></li>
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/images/331_0.jpg" alt="331_0" title="331_0" id="wows1_1"/></li>
		<li><a href="http://wowslider.com/vf"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/images/1232914frederika.jpg" alt="full screen slider" title="1232914-frederika" id="wows1_2"/></a></li>
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/images/1img.jpg" alt="1img" title="1img" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="2Turciya"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/tooltips/2turciya.jpg" alt="2Turciya"/>1</a>
		<a href="#" title="331_0"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/tooltips/331_0.jpg" alt="331_0"/>2</a>
		<a href="#" title="1232914-frederika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/tooltips/1232914frederika.jpg" alt="1232914-frederika"/>3</a>
		<a href="#" title="1img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data1/tooltips/1img.jpg" alt="1img"/>4</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
<?php
$res=SiteController::allHome();
foreach($res as $key){
?>
<?=$key->text?>
    <hr />
    <?}?>
    
</div>