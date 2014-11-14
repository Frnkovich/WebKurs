<?php

class HotelController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public static function  viewHotel($id_hotel){
        $res=Hotel::model()->findAllByAttributes(array('id_hotel'=>$id_hotel));
        return $res;
    }
    
        public static function allHotel(){
        
        $res = Hotel::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
        public function actionView(){
        $this->render('detailed');
       }
}