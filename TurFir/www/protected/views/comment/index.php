<?php
/* @var $this CommentController */

$this->breadcrumbs=array(
	'Comment',

);

    global $next_column_is_second;
?>

<div class = "text-left"><h2>Отзывы</h2></div>

<?php $next_column_is_second = false; ?>

<?php   foreach ($all_messages as $ord_message): ?>

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



<div class = "text-left"><h2>Напиши свой отзыв</h2></div>
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
            <td width="30"><?php echo CHtml::activeLabel($form, 'id_tour'); ?></td>
            <td><?php echo CHtml::activeTextField($form,'id_tour', array('class' => 'form-control', 'style' => 'width: 55%')); ?></td>
        </tr>
        
        <tr>
            <td></td>
            <td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
        </tr>
    </table>

<?php echo CHtml::endForm(); ?>