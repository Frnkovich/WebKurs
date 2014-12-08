

<?php
/* @var $this SiteController */
if(isset($_GET['id_tour'])){
    $id_tour = $_GET['id_tour'];
$res=TourController::viewTour($id_tour);
$r=TourController::viewComment($id_tour);
$pic=TourController::viewPicture($id_tour);
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
    
    <?foreach($pic as $k){?>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/albom/<?=$k->id?><?=$k->img?>" alt="1img1" title="<?=$k->description?>" id="wows1_1" width="300px" height="341px"/></li>
        
        <?}?>
	</ul></div>
	
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
            <td><?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
			<td><?php echo CHtml::submitButton('Отправить отзыв', array('id' => "submit", 'class' => 'btn btn-default')); ?></td>
        </tr>
    </table>

<?php echo CHtml::endForm(); ?>


