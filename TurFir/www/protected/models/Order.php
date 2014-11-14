<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id_order
 * @property string $tourist_email
 * @property string $tourist_name
 * @property string $name_tour
 * @property string $name_country
 * @property string $name_hotel
 * @property integer $cost
 * @property string $date_departure
 * @property string $date_return
 * @property integer $id_user
 * @property integer $id_tour
 * @property integer $id_country
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tourist_email, tourist_name, name_tour, name_country, name_hotel, cost, date_departure, date_return, id_user, id_tour, id_country', 'required'),
			array('cost, id_user, id_tour, id_country', 'numerical', 'integerOnly'=>true),
			array('tourist_email, tourist_name, name_tour, name_country, name_hotel', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_order, tourist_email, tourist_name, name_tour, name_country, name_hotel, cost, date_departure, date_return, id_user, id_tour, id_country', 'safe', 'on'=>'search'),
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
			'id_order' => 'Id Order',
			'tourist_email' => 'Tourist Email',
			'tourist_name' => 'Tourist Name',
			'name_tour' => 'Name Tour',
			'name_country' => 'Name Country',
			'name_hotel' => 'Name Hotel',
			'cost' => 'Cost',
			'date_departure' => 'Date Departure',
			'date_return' => 'Date Return',
			'id_user' => 'Id User',
			'id_tour' => 'Id Tour',
			'id_country' => 'Id Country',
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

		$criteria->compare('id_order',$this->id_order);
		$criteria->compare('tourist_email',$this->tourist_email,true);
		$criteria->compare('tourist_name',$this->tourist_name,true);
		$criteria->compare('name_tour',$this->name_tour,true);
		$criteria->compare('name_country',$this->name_country,true);
		$criteria->compare('name_hotel',$this->name_hotel,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('date_departure',$this->date_departure,true);
		$criteria->compare('date_return',$this->date_return,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_tour',$this->id_tour);
		$criteria->compare('id_country',$this->id_country);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
