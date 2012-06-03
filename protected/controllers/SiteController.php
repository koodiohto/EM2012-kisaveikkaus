<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionShowBet()
	{
		$veikkaus=$this->getAllBets();
		
		$veikkausValinta = 1;
		if(isset($_POST['veikkaus'])){
			$veikkausValinta = $_POST['veikkaus'];
		}
		
		if(isset($_POST['nimimerkki'])){
			$nimimerkki = $_POST['nimimerkki'];
		}
		
		$veikkausManager = new VeikkausManager;
		$rivit = $veikkausManager->getAllBets($veikkausValinta);
		$countryCodeToId = $veikkausManager->getIdToCountryCodeMap();
		$this->render('showBet', array('veikkaus'=>$veikkaus, 'veikkausValinta'=>$veikkausValinta, 
			'rivit'=>$rivit, 'idToCodes'=>$countryCodeToId, 'nimimerkki'=>$nimimerkki));
	}	
	
	public function actionLeaveBet()
	{
		
		$em_start_date = "2012-06-08-16";
		if(date("Y-m-d-H") < $em_start_date){
		    // retrieve items to be updated in a batch mode
		    // assuming each item is of model class 'Item'
		    $veikkaaja=new Veikkaaja;
			$lohkoVeikkaus[]=new LohkoVeikkaus;
			$voittajaVeikkaus[]=new VoittajaVeikkaus;
			$veikkaus=$this->getAllBets();
			$lohkoA = $this->getDropDownListForGroup(1);//CHTML-list
			$lohkoB = $this->getDropDownListForGroup(2);
			$lohkoC = $this->getDropDownListForGroup(3);
			$lohkoD = $this->getDropDownListForGroup(4);
			$kaikkiJoukkueet = $this->getAllGroups();
			$error = "";
			
			if(isset($_POST['Veikkaaja']['Nimi']) && Veikkaaja::model()->findByAttributes(array('NimiMerkki'=>$_POST['Veikkaaja']['NimiMerkki']))){
				$error = "Antamasi nimimerkki on jo käytössä.";
			}else if(isset($_POST['Veikkaaja']['Nimi']) && $error === "" && Veikkaaja::model()->findByAttributes(array('SahkoPosti'=>$_POST['Veikkaaja']['SahkoPosti']))){
				$error = "Antamallassi sähköpostilla on jo rekisteröity veikkaus.";
			}else if($this->validateVeikkausInput()){
		    	$veikkausManager = new VeikkausManager;
				$veikkaajap = $veikkausManager->leaveBet($_POST);
				//echo "nimi: ".$veikkaaja->Nimi." getErrors: ".print_r($veikkaajap->getErrors());
				$rivit = $veikkausManager->getAllBets($_POST['veikkaus']);
				$countryCodeToId = $veikkausManager->getIdToCountryCodeMap();
				$this->render('showBet', array('rivit'=>$rivit, 'idToCodes'=>$countryCodeToId, 'veikkaus'=>$_POST['veikkaus'], 'nimimerkki'=>$_POST['Veikkaaja']['NimiMerkki']));
				return;
		    }else if(isset($_POST['Veikkaaja']['Nimi'])){
				$error = "Jättämääsi veikkausta ei voitu hyväksyä. Ole hyvä ja täytä kaikki kentät sekä valitse lohkojen järjestys ja mitalikolmikko. Huomioi että 
				lohkon voittaja ja kakkonen ei voi olla sama joukkue. Myös mitalijoukkueiden täytyy olla eri joukkueita 
				keskenään.";
			}
		    // displays the view to collect tabular input
		    $this->render('leaveBet',array('veikkaus'=>$veikkaus, 'veikkaaja'=>$veikkaaja, 'lohkoA'=>$lohkoA, 'lohkoB'=>$lohkoB, 
				'lohkoC'=>$lohkoC, 'lohkoD'=>$lohkoD, 'kaikkiJoukkueet'=>$kaikkiJoukkueet, 'error'=>$error));
		}else {
			$this->render('error');
		}
	}

	/**
	 * Check that all bets are entered and that group firsts and seconds are not the same country and the medal winners
	 * are not the same country.
	 */
	private function validateVeikkausInput(){
		return $this->issetAndNotNull($_POST['veikkaus']) && $this->issetAndNotNull($_POST['Veikkaaja']['Nimi']) && ($this->issetAndNotNull($_POST['Veikkaaja']['NimiMerkki'])) && 
	    	$this->issetAndNotNull($_POST['Veikkaaja']['SahkoPosti']) && $this->issetAndNotNull($_POST['lohkoA1']) && 
	    	$this->issetAndNotNull($_POST['lohkoB1']) && $this->issetAndNotNull($_POST['lohkoC1']) 
	    	&& $this->issetAndNotNull($_POST['lohkoD1']) && $this->issetAndNotNull($_POST['lohkoA2']) 
	    	&& $this->issetAndNotNull($_POST['lohkoB2']) && $this->issetAndNotNull($_POST['lohkoC2']) && 
	    	$this->issetAndNotNull($_POST['lohkoD2']) && $this->issetAndNotNull($_POST['Voittaja']) && 
	    	$this->issetAndNotNull($_POST['Kakkonen']) && $this->issetAndNotNull($_POST['Kolmonen']) && 
	    	$_POST['lohkoA1'] != $_POST['lohkoA2'] && $_POST['lohkoB1'] != $_POST['lohkoB2']  && 
	    	$_POST['lohkoC1'] != $_POST['lohkoC2']  && $_POST['lohkoD1'] != $_POST['lohkoD2'] 
			&& $_POST['Voittaja'] != $_POST['Kakkonen'] && $_POST['Voittaja'] != $_POST['Kolmonen'] &&
			$_POST['Kakkonen'] != $_POST['Kolmonen'];		
	}
	
	private function issetAndNotNull($var){
		return isset($var) && !empty($var);
	}
	
	private function getAllGroups(){
		return $this->getDropDownListForGroup(false);
	}
	
	private function getDropDownListForGroup($groupNumber){//return all groups if no groupNumber given.
		// retrieve the models from db
			
		$criteria = new CDbCriteria;
		if(!$groupNumber){
			$criteria->condition = 'JoukkueID ORDER BY MaaNimi ASC';
		}else{
			$criteria->condition = 'LohkoID = '.$groupNumber.' ORDER BY MaaNimi ASC';	
		}
		

		$groups = Joukkue::model()->findAll($criteria);
 
	// format models as $key=>$value with listData
		$list = CHtml::listData($groups, 
                'JoukkueID', 'MaaNimi');
		return $list;
	}
	
	
	private function getAllBets(){
		// retrieve the models from db
			
		$criteria = new CDbCriteria;
		$criteria->condition = 'VeikkausID ORDER BY VeikkausNimi ASC';

		$bets = Veikkaus::model()->findAll($criteria);
 
	// format models as $key=>$value with listData
		$list = CHtml::listData($bets, 
                'VeikkausID', 'VeikkausNimi');
		return $list;
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

}