<?php

class CountryController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

        public function actionView(){
        $this->render('detailed');
       }
    
    public static function  viewCountry($id_country){
        $res=Country::model()->findAllByAttributes(array('id_country'=>$id_country));
        return $res;
    }
    
    public static function allCountry(){
        
        $res = Country::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
    
}