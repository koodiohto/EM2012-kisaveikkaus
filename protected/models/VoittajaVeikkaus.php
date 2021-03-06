<?php

/**
 * This is the model class for table "VoittajaVeikkaus".
 *
 * The followings are the available columns in table 'VoittajaVeikkaus':
 * @property integer $VoittajaVeikkausID
 * @property integer $LoppuSijoitusVeikkaus
 * @property integer $JoukkueID
 * @property integer $VeikkaajaID
 * @property integer $VeikkausID
 */
class VoittajaVeikkaus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VoittajaVeikkaus the static model class
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
		return 'VoittajaVeikkaus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LoppuSijoitusVeikkaus, JoukkueID, VeikkaajaID, VeikkausID', 'required'),
			array('LoppuSijoitusVeikkaus, JoukkueID, VeikkaajaID, VeikkausID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('VoittajaVeikkausID, LoppuSijoitusVeikkaus, JoukkueID, VeikkaajaID, VeikkausID', 'safe', 'on'=>'search'),
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
			'VoittajaVeikkausID' => 'Voittaja Veikkaus',
			'LoppuSijoitusVeikkaus' => 'Loppu Sijoitus Veikkaus',
			'JoukkueID' => 'Joukkue',
			'VeikkaajaID' => 'Veikkaaja',
			'VeikkausID' => 'Veikkaus',
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

		$criteria->compare('VoittajaVeikkausID',$this->VoittajaVeikkausID);
		$criteria->compare('LoppuSijoitusVeikkaus',$this->LoppuSijoitusVeikkaus);
		$criteria->compare('JoukkueID',$this->JoukkueID);
		$criteria->compare('VeikkaajaID',$this->VeikkaajaID);
		$criteria->compare('VeikkausID',$this->VeikkausID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}