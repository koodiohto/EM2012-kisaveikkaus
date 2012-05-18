<?php

/**
 * This is the model class for table "Lohko".
 *
 * The followings are the available columns in table 'Lohko':
 * @property integer $LohkoID
 * @property string $LohkoTunnus
 */
class Lohko extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lohko the static model class
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
		return 'Lohko';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LohkoTunnus', 'required'),
			array('LohkoTunnus', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('LohkoID, LohkoTunnus', 'safe', 'on'=>'search'),
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
			'LohkoID' => 'Lohko',
			'LohkoTunnus' => 'Lohko Tunnus',
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

		$criteria->compare('LohkoID',$this->LohkoID);
		$criteria->compare('LohkoTunnus',$this->LohkoTunnus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}