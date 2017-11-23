<?php
class Etat_V{
	private $date;
	private $heure;
	private $numVelo;
	private $etatVelo;
	private $dureeVelo;

	public function __construct($date, $heure, $numVelo, $etatVelo, $dureeVelo){
		$this->date = $date;
		$this->heure = $heure;
		$this->numVelo = $numVelo;
		$this->etatVelo = $etatVelo;
		$this->dureeVelo = $dureeVelo;
	}
	
	public function getDate(){
		return $this->date;
	}
	public function setDate($date){
		$this->date = $date;
	}

	public function getHeure(){
		return $this->heure;
	}
	public function setHeure($heure){
		$this->heure = $heure;
	}

	public function getNumVelo(){
		return $this->numVelo;
	}
	public function setNumVelo($numVelo){
		$this->numVelo = $numVelo;
	}

	public function getEtatVelo(){
		return $this->etatVelo;
	}
	public function setEtatVelo($etatVelo){
		$this->etatVelo = $etatVelo;
	}

	public function getDureeVelo(){
		return $this->dureeVelo;
	}
	public function setDureeVelo($dureeVelo){
		$this->dureeVelo = $dureeVelo;
	}

}
?>
