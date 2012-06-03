<?php

/**
 * This is the model class for table "Veikkaus".
 *
 * The followings are the available columns in table 'Veikkaus':
 * @property integer $VeikkausID
 * @property string $VeikkausNimi
 * @property string $Salasana
 */
class Veikkaus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Veikkaus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Veikkaus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VeikkausNimi', 'required'),
			array('VeikkausNimi', 'length', 'max'=>40),
			array('Salasana', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('VeikkausID, VeikkausNimi, Salasana', 'safe', 'on'=>'search'),
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
			'VeikkausID' => 'Veikkaus',
			'VeikkausNimi' => 'Anna kaveriporukallesi nimi',
			'Salasana' => 'Anna salasana jolla kaveriporukkasi kisaan voi liittyä',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('VeikkausID',$this->VeikkausID);
		$criteria->compare('VeikkausNimi',$this->VeikkausNimi,true);
		$criteria->compare('Salasana',$this->Salasana,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}