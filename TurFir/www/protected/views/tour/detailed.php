

<?php
/* @var $this SiteController */
if(isset($_GET['id_tour'])){
    $id_tour = $_GET['id_tour'];
$res=TourController::viewTour($id_tour);
$r=TourController::viewComment($id_tour);
?>
<div >
<?
foreach($res as $key){
    echo $key->text;
    }
?>
</div>
<?}?>
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
    global $next_column_is_second;
?>

<div class = "text-left"><h2>Comments</h2></div>

<?php $next_column_is_second = false; ?>

<?php   foreach ($r as $ord_message): ?>

    <?php if ($next_column_is_second == false): ?>

    <div class = "row">

        <div class = "col-lg-6">
            <div class = "linesection"></div>

            <h3><?php echo $ord_message->user_name; ?></h3>

            <?php echo $ord_message->comment_text; ?><br><br>

            <div class = "text-right"><?php echo $ord_message->comment_date; ?></div>
        </div>
<hr />
    <?php endif; ?>

    <?php if ($next_column_is_second == true): ?>


            <div class = "col-lg-6">
                <div class = "linesection"></div>

                <h3><?php echo $ord_message->user_name; ?></h3>

                <?php echo $ord_message->comment_text; ?><br><br>

                <div class = "text-right"><?php echo $ord_message->comment_date; ?></div>
            </div>

        </div>
<hr />
    <?php  endif; ?>

    <?php
        if ($next_column_is_second == true) $next_column_is_second = false;
        else $next_column_is_second = true;
    ?>

<?php   endforeach; ?>

<?php if ($next_column_is_second == true): ?>

    <div class = "col-lg-6">
    </div>
    </div>

<?php endif; ?>






<div class = "text-left"><h2>Create comment</h2></div>
<div class = "linesection"></div>

<?php echo CHtml::form(); ?>
<?php echo CHtml::errorSummary($form); ?><br>

    <table id="form2" border="0" width="400" cellpadding="10" cellspacing="10">
        <tr>
            <td width="30"><?php echo CHtml::activeLabel($form, 'user_name'); ?></td>
            <td><?php echo CHtml::activeTextField($form,'user_name', array('class' => 'form-control', 'style' => 'width: 55%')); ?></td>
        </tr>
        <tr>
            <td width="150"><?php echo CHtml::activeLabel($form, 'comment_text'); ?></td>
            <td><?php echo CHtml::activeTextArea($form, 'comment_text', array('cols'=>70, 'rows'=>6, 'class'=>'form-control', 'style' => 'width:55%')); ?></td>
        </tr>

        <tr>
            <td></td>
            <td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
        </tr>
    </table>

<?php echo CHtml::endForm(); ?>


