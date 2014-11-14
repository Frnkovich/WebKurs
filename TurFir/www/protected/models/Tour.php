<?php

/**
 * This is the model class for table "tour".
 *
 * The followings are the available columns in table 'tour':
 * @property integer $id_tour
 * @property string $name_tour
 * @property string $short_text
 * @property string $text
 * @property integer $tour_cost
 * @property integer $id_country
 * @property integer $visible
 * @property string $image
 *
 * The followings are the available model relations:
 * @property Hotel[] $hotels
 * @property Share[] $shares
 * @property Country $idCountry
 */
class Tour extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tour';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_tour, short_text, text, tour_cost, id_country, visible, image', 'required'),
			array('tour_cost, id_country, visible', 'numerical', 'integerOnly'=>true),
			array('name_tour, short_text', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tour, name_tour, short_text, text, tour_cost, id_country, visible, image', 'safe', 'on'=>'search'),
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
			'hotels' => array(self::HAS_MANY, 'Hotel', 'id_tour'),
			'shares' => array(self::HAS_MANY, 'Share', 'id_tour'),
			'idCountry' => array(self::BELONGS_TO, 'Country', 'id_country'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tour' => 'Id Tour',
			'name_tour' => 'Name Tour',
			'short_text' => 'Short Text',
			'text' => 'Text',
			'tour_cost' => 'Tour Cost',
			'id_country' => 'Id Country',
			'visible' => 'Visible',
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

		$criteria->compare('id_tour',$this->id_tour);
		$criteria->compare('name_tour',$this->name_tour,true);
		$criteria->compare('short_text',$this->short_text,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('tour_cost',$this->tour_cost);
		$criteria->compare('id_country',$this->id_country);
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
	 * @return Tour the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
