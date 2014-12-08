<?php

/**
 * This is the model class for table "albom".
 *
 * The followings are the available columns in table 'albom':
 * @property integer $id
 * @property string $img
 * @property string $description
 * @property integer $id_tour
 *
 * The followings are the available model relations:
 * @property Tour $idTour
 */
class Albom extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'albom';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img, description, id_tour', 'required'),
			array('id_tour', 'numerical', 'integerOnly'=>true),
			array('img, description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, img, description, id_tour', 'safe', 'on'=>'search'),
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
			'img' => Yii::t('main-ui', 'Изображение'),
			'description' => Yii::t('main-ui', 'Описание'),
			'id_tour' => Yii::t('main-ui', 'Тур'),
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
		$criteria->compare('img',$this->img,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_tour',$this->id_tour);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Albom the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
