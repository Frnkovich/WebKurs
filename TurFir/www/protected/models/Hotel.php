<?php

/**
 * This is the model class for table "hotel".
 *
 * The followings are the available columns in table 'hotel':
 * @property integer $id_hotel
 * @property string $name_hotel
 * @property string $short_text
 * @property string $text
 * @property integer $type
 * @property integer $hotel_cost
 * @property integer $id_tour
 * @property integer $visible
 * @property string $image
 *
 * The followings are the available model relations:
 * @property Tour $idTour
 */
class Hotel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hotel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_hotel, short_text, text, type, hotel_cost, id_tour, visible, image', 'required'),
			array('type, hotel_cost, id_tour, visible', 'numerical', 'integerOnly'=>true),
			array('name_hotel, short_text, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hotel, name_hotel, short_text, text, type, hotel_cost, id_tour, visible, image', 'safe', 'on'=>'search'),
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
			'idTour' => array(self::BELONGS_TO, 'Tour', 'id_tour'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hotel' => 'Id',
			'name_hotel' => Yii::t('main-ui', 'Название отеля'),
			'short_text' => Yii::t('main-ui', 'Краткое описание'),
			'text' => Yii::t('main-ui', 'Текст'),
			'type' => Yii::t('main-ui', 'Тип отеля'),
			'hotel_cost' => Yii::t('main-ui', 'Стоимость'),
			'id_tour' => Yii::t('main-ui', 'Тур'),
			'visible' => Yii::t('main-ui', 'Доступность'),
			'image' => Yii::t('main-ui', 'Изображение'),
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

		$criteria->compare('id_hotel',$this->id_hotel);
		$criteria->compare('name_hotel',$this->name_hotel,true);
		$criteria->compare('short_text',$this->short_text,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('hotel_cost',$this->hotel_cost);
		$criteria->compare('id_tour',$this->id_tour);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hotel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
