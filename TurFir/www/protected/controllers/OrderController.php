<?php

class OrderController extends Controller
{
	public function actionIndex()
	{
	  		$this->render('index');
	}

     /* public function actionView(){
        $res = Tour::model()->findAllByAttributes(array('visible'=>'1'));
        $this->render('', array('res'=>$res));
       }
    /*
    public static function  viewCountry($id_country){
        $res=Country::model()->findAllByAttributes(array('id_country'=>$id_country, 'visible'=>'1'));
        return $res;
    }
    
    public static function allTour(){
        
        $res = Tour::model()->findAllByAttributes(array('visible'=>'1'));
        //$query = "SELECT name_tour FROM tour";
        //$res = mysql_query($query);
        return $res;
    }
    
   public static function  viewTour($id_tour){
        $res=Tour::model()->findAllByAttributes(array('id_tour'=>$id_tour, 'visible'=>'1'));
        return $res;
    }
    
      
    
        public static function  viewHotel($id_hotel){
        $res=Hotel::model()->findAllByAttributes(array('id_hotel'=>$id_hotel));
        return $res;
    }
    
        public static function allHotel(){
        
        $res = Hotel::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
    */
    
    public static function allTour()
    {
    $res = Tour::model()->findAllByAttributes(array('visible' => '1'));
    $list = CHtml::listData($res,'id_tour','name_tour');
    return $list;
    }
    
        public static function allHotel()
    {
    $res = Hotel::model()->findAllByAttributes(array('visible' => '1'));
    $list = CHtml::listData($res,'id_hotel','name_hotel');
    return $list;
    }
    
        public static function allCountry()
    {
    $res = Country::model()->findAllByAttributes(array('visible' => '1'));
    $list = CHtml::listData($res,'id_country','name');
    return $list;
    }
    
    public static function sad()
    {
    $res = News::model()->findAllByAttributes(array('date_create' => '2008-11-20 00:00:00'));
   
    return $list;
    }
    
        public static function sad1()
    {
    $res = News::model()->findAllByAttributes(array('date_create' => '2014-11-09 10:43:06'));
    
    return $list;
    }
    
      public function actiongetmodifications()
    {
    $data=Location::model()->findAll('parent_id=:parent_id', 
                  array(':parent_id'=>(int) $_POST['country_id']));
 
    $data=CHtml::listData($data,'id','name');
    foreach($data as $value=>$name)
    {
        echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    }
    }
}


