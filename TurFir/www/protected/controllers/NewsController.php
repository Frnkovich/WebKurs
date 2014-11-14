<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

        public function actionView(){
        $this->render('detailed');
       }
    
    public static function  viewNews($id_news){
        $res=News::model()->findAllByAttributes(array('id_news'=>$id_news));
        return $res;
    }
    
        public static function allNews(){
        
        $res = News::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
}