<?php
class Emprunt{
  private $codeAcces;
  private $codeSecret;
  private $numVelo;
  private $date;
  private $heure;
  private $duree;

  public function __construct($codeAcces, $codeSecret, $numVelo, $date, $heure, $duree){
    $this->codeAcces = $codeAcces;
    $this->codeSecret = $codeSecret;
    $this->numVelo = $numVelo;
    $this->date = $date;
    $this->heure = $heure;
    $this->duree = $duree;
  }

  public function getCodeAcces(){
    return $this->codeAcces;
  }
  public function setCodeAcces($codeAcces){
    $this->codeAcces = $codeAcces;
  }

  public function getCodeSecret(){
    return $this->codeSecret;
  }
  public function setCodeSecret($codeSecret){
    $this->codeSecret = $codeSecret;
  }

  public function getNumVelo(){
    return $this->numVelo;
  }
  public function setNumVelo($numVelo){
    $this->numVelo = $numVelo;
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

  public function getDuree(){
    return $this->duree;
  }
  public function setDuree($duree){
    $this->duree = $duree;
  }


  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM EMPRUNTER');

    foreach($req->fetchAll() as $emprunt) {
      $list[] = new Abonne($emprunt['emp_codeAcces'], $emprunt['emp_codeSecret'], $emprunt['emp_numVelo'], $emprunt['emp_date'], $emprunt['emp_heure'], $emprunt['emp_duree']);
    }
    return $list;
  }

}
?>
