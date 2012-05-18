<?php

/**
 * This is the model class for table "Veikkaaja".
 *
 * The followings are the available columns in table 'Veikkaaja':
 * @property integer $VeikkaajaID
 * @property string $Nimi
 * @property string $NimiMerkki
 * @property string $SahkoPosti
 */
class Veikkaaja extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Veikkaaja the static model class
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
		return 'Veikkaaja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nimi, NimiMerkki, SahkoPosti', 'required'),
			array('Nimi', 'length', 'max'=>40),
			array('NimiMerkki', 'length', 'max'=>30),
			array('SahkoPosti', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('VeikkaajaID, Nimi, NimiMerkki, SahkoPosti', 'safe', 'on'=>'search'),
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
			'VeikkaajaID' => 'Veikkaaja',
			'Nimi' => 'Nimi',
			'NimiMerkki' => 'Nimi Merkki',
			'SahkoPosti' => 'Sahko Posti',
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

		$criteria->compare('VeikkaajaID',$this->VeikkaajaID);
		$criteria->compare('Nimi',$this->Nimi,true);
		$criteria->compare('NimiMerkki',$this->NimiMerkki,true);
		$criteria->compare('SahkoPosti',$this->SahkoPosti,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}