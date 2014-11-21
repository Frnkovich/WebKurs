<?php

class TourController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
    public function actionView($id_tour)
 {
        $form = new Comment();

        if (!empty($_POST['Comment']))
        {
            $form->attributes = $_POST['Comment'];
            $form->id_tour = $id_tour;
            $form->save();
            $all_messages = Comment::model()->findAll(array('order'=>'comment_date'));
            $form = new Comment();
            $this->redirect($id_tour,array('form'=>$form,'all_messages'=>$all_messages));
        }
        else
        {
            $all_messages = Comment::model()->findAll(array('order'=>'comment_date'));
            $this->render('detailed',array('form'=>$form,'all_messages'=>$all_messages));
        }
 }
 
    
    
    public static function  viewTour($id_tour){
        $res=Tour::model()->findAllByAttributes(array('id_tour'=>$id_tour));
        return $res;
    }
    
    public static function  viewComment($id_tour){
        $res=Comment::model()->findAllByAttributes(array('id_tour'=>$id_tour));
        return $res;
    }
    
        public static function allTour(){
        
        $res = Tour::model()->findAllByAttributes(array('visible'=>'1'));
        return $res;
    }
  /*  public function actionView(){
         
        $newcomment = new Comment;        
        $this->render('detailed', array('newcomment'=>$newcomment));
       }
       */
}