<?php

class CommentController extends Controller
{
/*	public function actionIndex()
	{
		$this->render('index');
	}
*/

public function actionIndex()
 {
        $form = new Comment();

        if (!empty($_POST['Comment']))
        {
            $form->attributes = $_POST['Comment'];
            //$form->id_comment = "1";
            $form->save();
            $all_messages = Comment::model()->findAll(array('order'=>'comment_date'));
            $form = new Comment();
            $this->redirect('index',array('form'=>$form,'all_messages'=>$all_messages));
        }
        else
        {
            $all_messages = Comment::model()->findAll(array('order'=>'comment_date'));
            $this->render('index',array('form'=>$form,'all_messages'=>$all_messages));
        }
 }

}