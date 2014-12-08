<?php

class UserController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public static function allUser(){ 
        $res = User::model()->findAll();
        return $res;
    }
}