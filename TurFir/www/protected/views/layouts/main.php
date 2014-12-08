<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/engine1/style.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
   
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	         <?php
            $this->widget('application.components.widgets.LanguageSelector');
            ?>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo Yii::t('main-ui', 'ТурФир'); ?></div>
	</div><!-- header -->
	<div id="mainmenu">
	


	<? $this->widget('ext.cssmenu.CssMenu',array(
	    'items'=>array(
	        array('label'=>Yii::t('main-ui', 'Главная'), 'url'=>array('/site/index/')),
			array('label'=>Yii::t('main-ui', 'Акции'), 'url'=>array('/share/index/')),
			array('label'=>Yii::t('main-ui', 'Страны'), 'url'=>array('/country/index/')),
			array('label'=>Yii::t('main-ui', 'Туры'), 'url'=>array('/tour/index/'), 'items'=>array(
				array('label'=>Yii::t('main-ui', 'Бронирование тура'), 'url'=>array('/order/index/')),
				array('label'=>Yii::t('main-ui', 'Поиск тура'), 'url'=>array('/tour/index/')),
  	        )),
			array('label'=>Yii::t('main-ui', 'О нас'), 'url'=>array('/site/index/'), 'items'=>array(
				array('label'=>Yii::t('main-ui', 'Новости'), 'url'=>array('/news/index/')),
				array('label'=>Yii::t('main-ui', 'Партнеры'), 'url'=>array('/partner/index/')),
				array('label'=>Yii::t('main-ui', 'Страхование'), 'url'=>array('/insurance/index/')),
  	        )),
			array('label'=>Yii::t('main-ui', 'Контакты'), 'url'=>array('/contact/index/')),
			array('label'=>Yii::t('main-ui', 'Карта проезда'), 'url'=>array('/map/index/')),
	    ),
	)); ?>
  
	</div><!-- mainmenu -->
<p>

</p>
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
