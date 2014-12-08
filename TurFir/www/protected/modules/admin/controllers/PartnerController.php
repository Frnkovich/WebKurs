<?php

class PartnerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','view','update','create','update'),
				'roles'=>array('3'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
    
    
    	public function actionCreate()
	{
       $model=new Partner;
    if(isset($_POST['Partner'])) {
        $model->attributes=$_POST['Partner'];
        $file_image = CUploadedFile::getInstance($model, 'img');
        if(is_object($file_image) && get_class($file_image) === 'CUploadedFile')
            $model->img = $file_image;
        if($model->save()) {
            if(is_object($file_image)) {
                $model->img->saveAs($_SERVER['DOCUMENT_ROOT'] . '/images/partner/' .$model->id_partner . $model->img);
            }
            $this->redirect(array('index'));
        }
    }
    $this->render('create',array(
        'model'=>$model,
    ));
	}


 
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
       
            $model=$this->loadModel($id);
    if(isset($_POST['Partner'])) {
        $model->attributes=$_POST['Partner'];
        $file_image = CUploadedFile::getInstance($model, 'img');
        if(is_object($file_image) && get_class($file_image) === 'CUploadedFile')
            $model->img = $file_image;
        if($model->save()) {
            if(is_object($file_image)) {
                $model->img->saveAs($_SERVER['DOCUMENT_ROOT'] . '/images/partner/' . $model->id_partner . $model->img);
            }
            $this->redirect(array('index'));
        }
    }
    $this->render('update',array(
        'model'=>$model,
    ));
}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Partner('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Partner']))
			$model->attributes=$_GET['Partner'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Partner the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Partner::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Partner $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='partner-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
