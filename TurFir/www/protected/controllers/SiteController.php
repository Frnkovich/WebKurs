<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
    public $layout='/layouts/column2';
    public static function allNews(){
        
        $res = News::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
    
    public function actionView(){
        $this->render('detailed');
       }
        
/*    public static function  viewNews($id_news){
        $res=News::model()->findAllByAttributes(array('id_news'=>$id_news));
        return $res;
    }
    
    public static function  viewCountry($id_country){
        $res=Country::model()->findAllByAttributes(array('id_country'=>$id_country));
        return $res;
    }
    
     public static function  viewTour($id_tour){
        $res=Tour::model()->findAllByAttributes(array('id_tour'=>$id_tour));
        return $res;
    }
    
     public static function  viewShare($id_share){
        $res=Share::model()->findAllByAttributes(array('id_share'=>$id_share));
        return $res;
    }
    
     public static function  viewHotel($id_hotel){
        $res=Hotel::model()->findAllByAttributes(array('id_hotel'=>$id_hotel));
        return $res;
    }
 */   
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


        public static function allShare(){
        //$res = Share::model()->findAllByAttributes(array('visible'=>'1'));
        $res = Share::model()->find(array('order'=>'share_date DESC'));
        return $res;
    }
    
    public static function allHome(){
        //$res = Share::model()->findAllByAttributes(array('visible'=>'1'));
        $res = Home::model()->findAll(array('order'=>'id'));
        return $res;
    }
    
    
        public static function  viewPicture(){
        $res=Albomc::model()->findAll();
        return $res;
    }
    
    public static function  viewPictureT(){
        $res=Albom::model()->findAll();
        return $res;
    }
	        public static function allContact(){
        $res = Contact::model()->findAll();
        return $res;
    }
}