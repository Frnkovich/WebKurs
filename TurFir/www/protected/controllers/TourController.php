<?php

class TourController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
    
    public static function  viewTour($id_tour){
        $res=Tour::model()->findAllByAttributes(array('id_tour'=>$id_tour));
        return $res;
    }
    
        public static function allTour(){
        
        $res = Tour::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
            public function actionView(){
        $this->render('detailed');
       }
}