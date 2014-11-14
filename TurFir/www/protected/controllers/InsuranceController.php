<?php

class InsuranceController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
    public static function allInsurance(){
        $res = Insurance::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
}