<?php

/**
 * This is the model class for table "LohkoTulos".
 *
 * The followings are the available columns in table 'LohkoTulos':
 * @property integer $LohkoTulosID
 * @property integer $LohkoSijoitus
 * @property integer $JoukkueID
 */
class LohkoTulos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LohkoTulos the static model class
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
		return 'LohkoTulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LohkoSijoitus, JoukkueID', 'required'),
			array('LohkoSijoitus, JoukkueID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('LohkoTulosID, LohkoSijoitus, JoukkueID', 'safe', 'on'=>'search'),
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
			'LohkoTulosID' => 'Lohko Tulos',
			'LohkoSijoitus' => 'Lohko Sijoitus',
			'JoukkueID' => 'Joukkue',
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

		$criteria->compare('LohkoTulosID',$this->LohkoTulosID);
		$criteria->compare('LohkoSijoitus',$this->LohkoSijoitus);
		$criteria->compare('JoukkueID',$this->JoukkueID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}