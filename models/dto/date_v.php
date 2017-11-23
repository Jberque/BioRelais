<?php
class DateV{
  private $date;
  private $heure;

  public function __construct($date, $heure){
    $this->date = $date;
    $this->heure = $heure;
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

}
?>
