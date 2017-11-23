<?php
class Etat_S{
	private $date;
	private $heure;
	private $numStation;
	private $etatStation;
	private $dureeStation;

	public function __construct($date, $heure, $numStation, $etatStation, $dureeStation){
		$this->date = $date;
		$this->heure = $heure;
		$this->numStation = $numStation;
		$this->etatStation = $etatStation;
		$this->dureeStation = $dureeStation;
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

	public function getNumStation(){
		return $this->numStation;
	}
	public function setNumStation($numStation){
		$this->numStation = $numStation;
	}

	public function getEtatStation(){
		return $this->etatStation;
	}
	public function setEtatStation($etatStation){
		$this->etatStation = $etatStation;
	}

	public function getDureeStation(){
		return $this->dureeStation;
	}
	public function setDureeStation($dureeStation){
		$this->dureeStation = $dureeStation;
	}

	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM etat_s');

		foreach($req->fetchAll() as $etatS) {
			$list[] = new Station($etatS['ets_date'], $etatS['ets_heure'], $etatS['ets_numStation'], $etatS['ets_etatStation'], $etatS['ets_dureeStation']);
		}
		return $list;
	}
}
?>
