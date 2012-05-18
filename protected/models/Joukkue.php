<?php

/**
 * This is the model class for table "Joukkue".
 *
 * The followings are the available columns in table 'Joukkue':
 * @property integer $JoukkueID
 * @property string $MaaTunnus
 * @property string $MaaNimi
 * @property integer $LohkoID
 */
class Joukkue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Joukkue the static model class
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
		return 'Joukkue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MaaTunnus, MaaNimi, LohkoID', 'required'),
			array('LohkoID', 'numerical', 'integerOnly'=>true),
			array('MaaTunnus', 'length', 'max'=>3),
			array('MaaNimi', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('JoukkueID, MaaTunnus, MaaNimi, LohkoID', 'safe', 'on'=>'search'),
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
			'JoukkueID' => 'Joukkue',
			'MaaTunnus' => 'Maa Tunnus',
			'MaaNimi' => 'Maa Nimi',
			'LohkoID' => 'Lohko',
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

		$criteria->compare('JoukkueID',$this->JoukkueID);
		$criteria->compare('MaaTunnus',$this->MaaTunnus,true);
		$criteria->compare('MaaNimi',$this->MaaNimi,true);
		$criteria->compare('LohkoID',$this->LohkoID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}