<?php
class FileController extends Controller
{
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }
    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
    /**
     * Загрузка файлов
     */
    public function actions()
    {
        return array(
            'upload' => array(
                'class' => 'ext.file-upload-action.EFileUploadAction',
                'name' => 'file',
                'createDirectory' => true,
                'createDirectoryMode' => 0777,
                'createDirectoryRecursive' => true,
                'filenameRule'=>'date("d.m.Y-H.i.s")."_".md5(date("m-d-H-i-s")).".".$file->extensionName',
                'path' => realpath(Yii::app()->basePath.'/..').'/images/',
                'onAfterUpload' => create_function('$event', '
                    if ($event->sender->hasErrors()) {
                        $result = CJSON::encode($event->sender->getErrors());
                    } else {
                        $file = array(
                            "filelink" => "/images/".$event->sender->filename,
                            "filename" => $event->sender->filename,
                        );
                        if($type = Yii::app()->request->getQuery("type", "file") == "image") {}
                        $result = CJSON::encode($file);
                    }
                    echo stripcslashes($result);
                    exit;
                '),
                // for php 5.3+
                /*'onAfterUpload' => function($event)
                {
                    if ($event->sender->hasErrors()) {
                        $result = CJSON::encode($event->sender->getErrors());
                    } else {
                        $file = array(
                            'filelink' => '/images/'.$event->sender->filename,
                            'filename' => $event->sender->filename,
                        );
                        if($type = Yii::app()->request->getQuery('type', 'file') == 'image') {}
                        $result = CJSON::encode($file);
                    }
                    echo stripcslashes($result);
                    exit;
                }*/
            ),
        );
    }
    /**
     * Просмотр списка файлов
     */
    public function actionList()
    {
        $pdirectory = realpath(Yii::app()->basePath.'/..').'/images/';
        $directory = '/images/';
        $allowed_types=array('jpg','jpeg','gif','png'); // добавляем расширения для других файлов
        $file_parts=array();
        $ext='';
        $title='';
        $i=0;
        $dir_handle = opendir($pdirectory) or die("There is an error with your image directory!");
        while (false !== ($file = readdir($dir_handle)))
        {
            if($file=='.' || $file == '..') continue;
            $file_parts = explode('.',$file);
            $ext = strtolower(array_pop($file_parts));
            $title = implode('.',$file_parts);
            $title = htmlspecialchars($title);
            if(in_array($ext,$allowed_types))
            {
                $array[] = array('thumb'=>$directory.$file,'image'=>$directory.$file,'title'=>$title);
                $i++;
            }
        }
        closedir($dir_handle);
        //echo '<pre>';
        //print_r($array);
        //echo '</pre>';
        echo CJSON::encode($array);
        exit;
    }
}