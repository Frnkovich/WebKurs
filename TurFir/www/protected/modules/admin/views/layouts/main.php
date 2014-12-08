<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

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
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('main-ui', 'Главная'), 'url'=>array('/admin/home'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Новости'), 'url'=>array('/admin/news'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Пользователи'), 'url'=>array('/admin/user'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Страны'), 'url'=>array('/admin/country'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Альбом стран'), 'url'=>array('/admin/albomc'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Туры'), 'url'=>array('/admin/tour'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Альбом тура'), 'url'=>array('/admin/albom'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Акции'), 'url'=>array('/admin/share'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Отели'), 'url'=>array('/admin/hotel'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Заказы'), 'url'=>array('/admin/order'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Партнеры'), 'url'=>array('/admin/partner'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Страхование'), 'url'=>array('/admin/insurance'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Комментарии'), 'url'=>array('/admin/comment'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('main-ui', 'Контакты'), 'url'=>array('/admin/contact'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
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
