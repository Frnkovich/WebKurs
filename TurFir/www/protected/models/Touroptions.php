<?php

/**
 * This is the model class for table "touroptions".
 *
 * The followings are the available columns in table 'touroptions':
 * @property integer $id
 * @property integer $id_tour
 * @property integer $zpassport
 * @property integer $visa
 * @property integer $alltour
 *
 * The followings are the available model relations:
 * @property Tour $idTour
 */
class Touroptions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'touroptions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tour, zpassport, visa, alltour', 'required'),
			array('id_tour, zpassport, visa, alltour', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_tour, zpassport, visa, alltour', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'id_tour' => Yii::t('main-ui', 'Тур'),
			'zpassport' => Yii::t('main-ui', 'Загран паспорт'),
			'visa' => Yii::t('main-ui', 'Виза'),
			'alltour' => Yii::t('main-ui', 'Все экскурсии'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_tour',$this->id_tour);
		$criteria->compare('zpassport',$this->zpassport);
		$criteria->compare('visa',$this->visa);
		$criteria->compare('alltour',$this->alltour);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Touroptions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
