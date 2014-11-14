<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id_news
 * @property string $name
 * @property string $short_text
 * @property string $text
 * @property integer $visible
 * @property string $date_create
 * @property string $image
 */
class News extends CActiveRecord
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, short_text, text, visible, image', 'required'),
			array('visible', 'numerical', 'integerOnly'=>true),
			array('name, short_text', 'length', 'max'=>255),
            array('image', 'unsafe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_news, name, short_text, text, visible, date_create, image', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_news' => 'Id News',
			'name' => 'Name',
			'short_text' => 'Short Text',
			'text' => 'Text',
			'visible' => 'Visible',
			'date_create' => 'Date Create',
            'image' => 'Image',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_news',$this->id_news);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('short_text',$this->short_text,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('date_create',$this->date_create,true);
        $criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
/*    protected function beforeSave() {
   if(parent::beforeSave()) {
       $this->date_create = date('Y-m-d', strtotime($this->date_create));//strtotime($this->date_start);
       return true;
   } else {
       return false;
   }
}


protected function afterFind() {
   $date = date('d.m.Y', strtotime($this->date_create));
   $this->date_create = $date;
   parent::afterFind();
}*/
}
