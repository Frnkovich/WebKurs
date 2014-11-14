<?php

class PartnerController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    
        public static function allPartner(){
        
        $res = Partner::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
}