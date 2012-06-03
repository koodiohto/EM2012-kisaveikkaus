<?php

class VeikkausManager{
	
	public function leaveBet($postArray){
		$veikkaaja=$this->buildAndSaveVeikkaaja($postArray);
		$lohkoVeikkaus[]=$this->buildAndSaveAllLohkoVeikkaus($postArray, $veikkaaja);
		$voittajaVeikkaus[]=$this->buildAndSaveVoittajaVeikkaus($postArray, $veikkaaja);
		return $veikkaaja->getErrors();	
	}
	
	private function buildAndSaveVeikkaaja($postArray){
		$veikkaaja=new Veikkaaja;
		$veikkaaja->Nimi = $postArray['Veikkaaja']['Nimi'];
		$veikkaaja->NimiMerkki = $postArray['Veikkaaja']['NimiMerkki'];
		$veikkaaja->SahkoPosti = $postArray['Veikkaaja']['SahkoPosti'];
		$veikkaaja->save();
		return $veikkaaja;
	}
	
	private function buildAndSaveAllLohkoVeikkaus($postArray, $veikkaaja){
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "A", 1);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "A", 2);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "B", 1);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "B", 2);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "C", 1);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "C", 2);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "D", 1);
		$this->buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, "D", 2);

	}
	
	private function buildAndSaveLohkoVeikkaus($postArray, $veikkaaja, $group, $position){
		$lohkoVeikkaus=new LohkoVeikkaus;
		
		$lohkoVeikkaus->VeikkausID = $postArray['veikkaus'];
		$lohkoVeikkaus->LohkoSijoitusVeikkaus = $position;
		$lohkoVeikkaus->JoukkueID = $postArray['lohko'.$group.$position];
		$lohkoVeikkaus->VeikkaajaID = $veikkaaja->VeikkaajaID;
		$lohkoVeikkaus->save();
	}
	
	private function buildAndSaveVoittajaVeikkaus($postArray, $veikkaaja){
		$voittaja=new VoittajaVeikkaus;
		
		$voittaja->LoppuSijoitusVeikkaus = 1;
		$voittaja->JoukkueID = $postArray['Voittaja'];
		$voittaja->VeikkaajaID = $veikkaaja->VeikkaajaID;
		$voittaja->VeikkausID = $postArray['veikkaus'];
		$voittaja->save();
		
		$kakkonen=new VoittajaVeikkaus;
		
		$kakkonen->LoppuSijoitusVeikkaus = 2;
		$kakkonen->JoukkueID = $postArray['Kakkonen'];
		$kakkonen->VeikkaajaID = $veikkaaja->VeikkaajaID;
		$kakkonen->VeikkausID = $postArray['veikkaus'];
		$kakkonen->save();
		
		$kolmonen=new VoittajaVeikkaus;
		
		$kolmonen->LoppuSijoitusVeikkaus = 3;
		$kolmonen->JoukkueID = $postArray['Kolmonen'];
		$kolmonen->VeikkaajaID = $veikkaaja->VeikkaajaID;
		$kolmonen->VeikkausID = $postArray['veikkaus'];
		$kolmonen->save();
	}
	
	/**
	 * Palauta kaikki veikkaukset kaikilta veikkaajilta tietylle veikkausporukalle
	 */
	public function getAllBets($veikkausID){
		$veikkaajat = Veikkaaja::model()->findAll(array('order'=>'NimiMerkki'));
		$veikkausRivit = array();
		$groupIdToCountryCode = $this->getIdToCountryCodeMap();
		foreach ($veikkaajat as $veikkaaja){
			$lohkoVeikkaukset = LohkoVeikkaus::model()->
				findAll(array("condition"=>"VeikkaajaID=".$veikkaaja->VeikkaajaID." AND VeikkausID=".$veikkausID, "order"=>"LohkoVeikkausID"));
			if($lohkoVeikkaukset == null || empty($lohkoVeikkaukset)){//no bets for this veikkaus for this veikkaaja.
				continue;
			}
			$voittajaVeikkaukset = VoittajaVeikkaus::model()->
				findAll(array("condition"=>"VeikkaajaID=".$veikkaaja->VeikkaajaID." AND VeikkausID=".$veikkausID, "order"=>"LoppuSijoitusVeikkaus"));
		$veikkausRivi = new VeikkausRivi;
		$veikkausRivi->veikkaaja = $veikkaaja;
		$veikkausRivi->lohkoVeikkaus = $lohkoVeikkaukset;
		$veikkausRivi->voittajaVeikkaus = $voittajaVeikkaukset;
		$pointsManager = new PointsManager;
		$veikkausRivi->pisteet = $pointsManager->calculatePoints($veikkausRivi);
		
		array_push($veikkausRivit, $veikkausRivi);	
		}
		
		return $veikkausRivit;
	}
	
	public function getIdToCountryCodeMap(){
		$groupIdToCountryCode = array();
		$groups = Joukkue::model()->findAll();
		foreach ($groups as $group){
			$groupIdToCountryCode[$group->JoukkueID]=$group->MaaTunnus;		
		}
		return $groupIdToCountryCode;
	}
	
}