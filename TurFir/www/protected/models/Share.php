<?php

/**
 * This is the model class for table "share".
 *
 * The followings are the available columns in table 'share':
 * @property integer $id_share
 * @property string $name_share
 * @property string $short_text
 * @property string $text
 * @property string $share_date
 * @property integer $id_tour
 * @property integer $visible
 * @property string $image
 *
 * The followings are the available model relations:
 * @property Tour $idTour
 */
class Share extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'share';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_share, short_text, text,  visible, image', 'required'),
			array('id_tour, visible', 'numerical', 'integerOnly'=>true),
			array('name_share, short_text, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_share, name_share, short_text, text, share_date, id_tour, visible, image', 'safe', 'on'=>'search'),
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
			'id_share' => 'Id',
			'name_share' => Yii::t('main-ui', 'Название акции'),
			'short_text' => Yii::t('main-ui', 'Краткое описание'),
			'text' => Yii::t('main-ui', 'Текст'),
			'share_date' => Yii::t('main-ui', 'Дата'),
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

		$criteria->compare('id_share',$this->id_share);
		$criteria->compare('name_share',$this->name_share,true);
		$criteria->compare('short_text',$this->short_text,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('share_date',$this->share_date,true);
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
	 * @return Share the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
