<?php
class Etat_P{
	private $date;
	private $heure;
	private $numStation;
	private $num;
	private $etatPlot;
	private $dureePlot;

	public function __construct($date, $heure, $numStation, $num, $etatPlot, $dureePlot){
		$this->date = $date;
		$this->heure = $heure;
		$this->numStation = $numStation;
		$this->num = $num;
		$this->etatPlot = $etatPlot;
		$this->dureePlot = $dureePlot;
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

	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		$this->num = $num;
	}

	public function getEtatPlot(){
		return $this->etatPlot;
	}
	public function setEtatPlot($etatPlot){
		$this->etatPlot = $etatPlot;
	}

	public function getDureePlot(){
		return $this->dureePlot;
	}
	public function setDureePlot($dureePlot){
		$this->dureePlot = $dureePlot;
	}

}
?>
