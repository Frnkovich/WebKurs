<?php

class ContactController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

        public static function allContact(){
        $res = Contact::model()->findAll();
        return $res;
    }
}