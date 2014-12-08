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
 * @property integer $date
 * @property integer $amount
 * @property integer $options
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
			
			array('cost, date, amount, zpass, visa, alltour, allfood, apartment', 'numerical', 'integerOnly'=>true),
			array('tourist_email, tourist_name, name_tour, name_country, name_hotel', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_order, tourist_email, tourist_name, name_tour, name_country, name_hotel, cost, date', 'safe', 'on'=>'search'),
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
			'id_order' => 'ID',
			'tourist_email' => 'Email',
			'tourist_name' => Yii::t('main-ui', 'Имя туриста'),
			'name_tour' => Yii::t('main-ui', 'Тур'),
			'name_country' => Yii::t('main-ui', 'Страна'),
			'name_hotel' => Yii::t('main-ui', 'Отель'),
			'cost' => Yii::t('main-ui', 'Стоимость'),
			'date' => Yii::t('main-ui', 'Дата'),
			'amount' => Yii::t('main-ui', 'Количество человек'),
			'zpass' => Yii::t('main-ui', 'Загранпаспорт'),
			'visa' => Yii::t('main-ui', 'Виза'),
			'alltour' => Yii::t('main-ui', 'Все экскурсии'),
			'allfood' => Yii::t('main-ui', 'Полное питание'),
			'apartment' => Yii::t('main-ui', 'VIP комната'),
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
		$criteria->compare('zpass',$this->zpass);
		$criteria->compare('visa',$this->visa);
		$criteria->compare('alltour',$this->alltour);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('allfood',$this->allfood);
		$criteria->compare('apartment',$this->apartment);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('date',$this->date);

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
