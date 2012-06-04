<?php

class PointsManager{
	
	var $lohkoTulokset = array();//map with JoukkueID as key and sijoitus as value
	var $voittajaTulokset = array();//map with sijoitus as key and JoukkueID as value
	
	
	function PointsManager(){
		global $lohkoTulokset, $voittajaTulokset;
		$lohkoTulokset = $this->getLohkoTulokset();
		$voittajaTulokset = $this->getVoittajaTulokset();
	}
	
	public function calculatePoints($rivi){
	 	
		global $lohkoTulokset, $voittajaTulokset;
				
		$points = 0;
					
		if($rivi->voittajaVeikkaus[0]->JoukkueID == $voittajaTulokset[1]){//winner was correct
			$points+=8;
		}else if($rivi->voittajaVeikkaus[0]->JoukkueID == $voittajaTulokset[2] || 
			$rivi->voittajaVeikkaus[0]->JoukkueID == $voittajaTulokset[3] || 
			$rivi->voittajaVeikkaus[0]->JoukkueID == $voittajaTulokset[4] ){//winner was not correct but played in semifinals
			$points+=4;			
		}
		
		if($rivi->voittajaVeikkaus[1]->JoukkueID == $voittajaTulokset[2]){//Second was correct
			$points+=5;
		}else if($rivi->voittajaVeikkaus[1]->JoukkueID == $voittajaTulokset[1] || 
			$rivi->voittajaVeikkaus[1]->JoukkueID == $voittajaTulokset[3] || 
			$rivi->voittajaVeikkaus[1]->JoukkueID == $voittajaTulokset[4] ){//Second was not correct but played in semifinals
			$points+=4;
		}
		
		if($rivi->voittajaVeikkaus[2]->JoukkueID == $voittajaTulokset[1] || 
			$rivi->voittajaVeikkaus[2]->JoukkueID == $voittajaTulokset[2] || 
			$rivi->voittajaVeikkaus[2]->JoukkueID == $voittajaTulokset[3] ||
			$rivi->voittajaVeikkaus[2]->JoukkueID == $voittajaTulokset[4] ){//Pronssimitaleille veikattu pelasi välierissä
			$points+=4;
		}
		
		/*$points = "rivi->lohkoVeikkaus[0]->JoukkueID: ".$rivi->lohkoVeikkaus[0]->JoukkueID.
			" lohkoTulokset[2]: ".$lohkoTulokset[2];*/
		
		for ($i=0; $i < 8; $i+=2) {//lohkoveikkaukset
			if($lohkoTulokset[$rivi->lohkoVeikkaus[$i]->JoukkueID] == 1){//lohkovoittajaksi veikattu voitti lohkon.
				$points+=3;
			}else if($lohkoTulokset[$rivi->lohkoVeikkaus[$i]->JoukkueID] == 2){//lohkovoittajaksi veikattu tuli toiseksi
				$points+=1;
			}
			if($lohkoTulokset[$rivi->lohkoVeikkaus[$i+1]->JoukkueID] == 2){//lohkokakkoseksi veikattu tuli toiseksi.
				$points+=2;
			}else if($lohkoTulokset[$rivi->lohkoVeikkaus[$i+1]->JoukkueID] == 1){//lohkokakkoseksi veikattu voitti lohkon
				$points+=1;
			}
		}
		return $points;
	}
		
	private function getLohkoTulokset(){
		$tulosTmp = array();
		$tulokset =  LohkoTulos::model()->findAll();
		foreach ($tulokset as $tulos){
			$tulosTmp[$tulos->JoukkueID]=$tulos->LohkoSijoitus;		
		}
		
		return $tulosTmp;
	}
	
	private function getVoittajaTulokset(){
		$tulosTmp = array();
		$tulokset =  VoittajaTulos::model()->findAll();
		foreach ($tulokset as $tulos){
			$tulosTmp[$tulos->LoppuSijoitus]=$tulos->JoukkueID;		
		}
		return $tulosTmp;
	}
}