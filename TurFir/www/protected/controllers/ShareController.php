<?php

class ShareController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public static function  viewShare($id_share){
        $res=Share::model()->findAllByAttributes(array('id_share'=>$id_share));
        return $res;
    }
    
        public static function allShare(){
        
        $res = Share::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
      public function actionView(){
        $this->render('detailed');
       }
}