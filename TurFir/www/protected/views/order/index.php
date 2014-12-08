<?php 
$res1=OrderController::allTour();
$res2=OrderController::allCountry();
$res3=OrderController::allHotel();
$country = CHtml::listData($res2, 'id_country', 'name');
$tour = CHtml::listData($res1, 'id_tour', 'name_tour');
$hotel = CHtml::listData($res3, 'id_hotel', 'name_hotel');
?>


<?php echo CHtml::form(); ?>
<?php echo CHtml::errorSummary($form); ?>

    <table id="form2" border="0" width="400" cellpadding="10" cellspacing="10">
        <tr>
            <td width="30"> <?php echo Yii::t('main-ui', 'Введите ваше имя');?> <?php// echo CHtml::activeLabel($form, 'tourist_name'); ?></td>
            <td><?php echo CHtml::activeTextField($form,'tourist_name', array('class' => 'form-control', 'style' => 'width: 55%')); ?></td>
        </tr>
        <tr>
            <td width="30"> <?php echo Yii::t('main-ui', 'Введите ваш e-mail');?> <?php //echo CHtml::activeLabel($form, 'tourist_email'); ?></td>
            <td><?php echo CHtml::activeTextField($form,'tourist_email', array('class' => 'form-control', 'style' => 'width: 55%')); ?></td>
        </tr>
        <tr>
            <td width="30"> <?php echo Yii::t('main-ui', 'Выберете страну');?> <?php //echo CHtml::activeLabel($form, 'name_country'); ?></td>
            <td><?php echo CHtml::activedropDownList($form,'name_country',  $country); ?></td>
        </tr>

		<tr>
            <td width="150"> <?php echo Yii::t('main-ui', 'Выберете тур');?> <?php //echo CHtml::activeLabel($form, 'tour'); ?></td>
            <td><?php echo CHtml::activedropDownList($form,'name_tour', $tour); ?></td>
        </tr>
		<tr>
		<td> <?php echo Yii::t('main-ui', 'Оформление загранпаспорта');?> <?php echo CHtml::activecheckBox($form,'zpass'); ?></td>
		</tr>
		<tr>
		<td> <?php echo Yii::t('main-ui', 'Оформление визы ');?><?php echo CHtml::activecheckBox($form,'visa'); ?></td>
		</tr>
		<tr>
		<td> <?php echo Yii::t('main-ui', 'Все экскурсии');?> <?php echo CHtml::activecheckBox($form,'alltour'); ?></td>
		</tr>
		
        <tr>
            <td width="150"><?php echo CHtml::activeLabel($form, 'name_hotel'); ?></td>
            <td><?php echo CHtml::activedropDownList($form,'name_hotel',  $hotel); ?></td>
        </tr>
		<tr>
		<td> <?php echo Yii::t('main-ui', 'Полное питание');?> <?php echo CHtml::activecheckBox($form,'allfood'); ?></td>
		</tr>
		<tr>
		<td> <?php echo Yii::t('main-ui', 'VIP номер');?> <?php echo CHtml::activecheckBox($form,'apartment'); ?></td>
		</tr>
        <tr>
            <td width="30"> <?php echo Yii::t('main-ui', 'Количество человек');?> <?php //echo CHtml::activeLabel($form, 'amount'); ?></td>
            <td><?php echo CHtml::activeTextField($form,'amount', array('class' => 'form-control', 'style' => 'width: 55%')); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
            <td><?php echo CHtml::submitButton(Yii::t('main-ui', 'Заказ'), array('name'=>"ord")); ?></td>
			<td><?php echo CHtml::submitButton(Yii::t('main-ui', 'Подсчет стоимости'), array('name'=>"calc")); ?></td>
			
        </tr>
    </table>

<?php 
$form->attributes = $_GET;
echo Yii::t('main-ui', 'Стоимость тура   '); 
echo $form->cost;
echo Yii::t('main-ui', '   руб'); 
echo CHtml::endForm();
 ?>


