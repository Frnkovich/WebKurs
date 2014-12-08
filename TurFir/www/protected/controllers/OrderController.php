<?php

class OrderController extends Controller
{
public function actionIndex()
 {
        $form = new Order();

        if (!empty($_POST['Order']))
        {
			if (isset($_POST['ord'])){
            $form->attributes = $_POST['Order'];
            //$form->id_order = "1";
			$tour=$form->name_tour;
			$t=Tour::model()->findbyPk($tour);
			$Tcost=$t->tour_cost;			
			$form->name_tour=$t->name_tour;
			
			$country=$form->name_country;
			$t=Country::model()->findbyPk($country);
			$form->name_country=$t->name;
			
			$hotel=$form->name_hotel;
			$t=Hotel::model()->findbyPk($hotel);
			$Hcost=$t->hotel_cost;	
			$form->name_hotel=$t->name_hotel;
			$date=$form->date;
			$amount=$form->amount;
			$touropt=Touroptions::model()->findByAttributes(array('id_tour'=>$tour));
			$zpass=$form->zpass ? $touropt->zpassport : 0; 
			$visa=$form->visa ? $touropt->visa : 0;
			$alltour=$form->alltour ? $touropt->alltour : 0;
			
			$hotopt=Hoteloptions::model()->findByAttributes(array('id_hotel'=>$hotel));
			$allfood=$form->allfood ? $hotopt->allfood : 0; 
			$apartment=$form->apartment ? $hotopt->apartment : 0;
			$cost=$form->cost=($Hcost+$apartment+$allfood+$Tcost+$zpass+$visa+$alltour)*$amount;
			
									
            $form->save();
            $all_messages = Order::model()->findAll(array('order'=>'date'));
            $form = new Order();
			$this->redirect(array('index'));
				}
				
			else if (isset($_POST['calc'])){
			$form->attributes = $_POST['Order'];
			$tour=$form->name_tour;
			$t=Tour::model()->findbyPk($tour);
			$Tcost=$t->tour_cost;			
			$form->name_tour=$t->name_tour;
			
			$country=$form->name_country;
			$t=Country::model()->findbyPk($country);
			$form->name_country=$t->name;
			
			$hotel=$form->name_hotel;
			$t=Hotel::model()->findbyPk($hotel);
			$Hcost=$t->hotel_cost;	
			$form->name_hotel=$t->name_hotel;
			$date=$form->date;
			$amount=$form->amount;
			$touropt=Touroptions::model()->findByAttributes(array('id_tour'=>$tour));
			$zpass=$form->zpass ? $touropt->zpassport : 0; 
			$visa=$form->visa ? $touropt->visa : 0;
			$alltour=$form->alltour ? $touropt->alltour : 0;
			
			$hotopt=Hoteloptions::model()->findByAttributes(array('id_hotel'=>$hotel));
			$allfood=$form->allfood ? $hotopt->allfood : 0; 
			$apartment=$form->apartment ? $hotopt->apartment : 0;
			$cost=$form->cost=($Hcost+$apartment+$allfood+$Tcost+$zpass+$visa+$alltour)*$amount;
			$this->redirect(array('index','cost'=>$cost));
	
				}
        }
        else
        {
            $all_messages = Order::model()->findAll(array('order'=>'date'));
            $this->render('index',array('form'=>$form));
        }
 }
 
         public static function allTour(){ 
        $res = Tour::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
    
            public static function allCountry(){ 
        $res = Country::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
    
      public static function allHotel(){ 
        $res = Hotel::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }

/*
    public function actionIndex()
 {
        $form = new Order();

        if (!empty($_POST['Order']))
        {
            $form->attributes = $_POST['Order'];
            $r=$form->name_country->idCountry;
            
            
            
            $all_messages = Order::model()->findAll(array('order'=>'date'));
            $form = new Order();
            $this->redirect('index',array('form'=>$form,'all_messages'=>$all_messages));
        }
        else
        {
            $all_messages = Order::model()->findAll(array('order'=>'date'));
            $this->render('index',array('form'=>$form,'all_messages'=>$all_messages));
        }
 }
    
  */  
    
}