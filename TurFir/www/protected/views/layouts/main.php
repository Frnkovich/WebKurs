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
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'News', 'url'=>array('/news/index')),
                array('label'=>'Country', 'url'=>array('/country/index')),
                array('label'=>'Share', 'url'=>array('/share/index')),
                array('label'=>'Tour', 'url'=>array('/tour/index')),
                array('label'=>'Hotel', 'url'=>array('/hotel/index')),
                
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
   <div id="mainmenu">   
    <ul id="menu">
    <li><a href="/site/index">Главная</a></li>
    <li><a href="/share/index">Акции</a>
    <li><a href="/country/index">Страны</a>
    <li><a href="/tour/index">Туры</a>
        <ul>
            <li><a href="/order/index">Бронирование тура</a></li>
            <li><a href="#">Search</a></li>
       </ul>
    </li>
    <li><a href="#">О нас</a>
        <ul>
            <li><a href="/news/index">Новости</a></li>
            <li><a href="/partner/index">Партнеры</a></li>
            <li><a href="/insurance/index">Страхование</a></li>
        </ul>
    </li>       
</ul>

   </div>       
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
<p>


</p>
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
