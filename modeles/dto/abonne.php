<?php
class Abonne{
  private $codeAcces;
  private $codeSecret;
  private $codeAbo;
  private $nom;
  private $prenom;
  private $dateDebAbn;
  private $dateFinAbn;
  private $creditTemps;
  private $montantDebit;

  public function __construct($codeAcces, $codeSecret, $codeAbo, $nom, $prenom, $dateDebAbn, $dateFinAbn, $creditTemps, $montantDebit){
    $this->codeAcces = $codeAcces;
    $this->codeSecre = $codeSecret;
    $this->codeAbo = $codeAbo;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateDebAbn = $dateDebAbn;
    $this->dateFinAbn = $dateFinAbn;
    $this->montantDebit = $montantDebit;
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

  public function getCodeAbo(){
    return $this->codeAbo;
  }
  public function setCodeAbo($codeAbo){
    $this->codeAbo = $codeAbo;
  }

  public function getNom(){
    return $this->nom;
  }
  public function setNom($nom){
    $this->nom = $nom;
  }

  public function getPrenom(){
    return $this->prenom;
  }
  public function setPrenom($prenom){
    $this->prenom = $prenom;
  }

  public function getDateDebAbn(){
    return $this->dateDebAbn;
  }
  public function setDateDebAbn($dateDebAbn){
    $this->dateDebAbn = $dateDebAbn;
  }

  public function getDateFinAbn(){
    return $this->dateFinAbn;
  }
  public function setDateFinAbn($dateFinAbn){
    $this->dateFinAbn = $dateFinAbn;
  }

  public function getCreditTemps(){
    return $this->creditTemps;
  }
  public function setCreditTemps($creditTemps){
    $this->creditTemps = $creditTemps;
  }

  public function getMontantDebit(){
    return $this->montantDebit;
  }
  public function setMontantDebit($montantDebit){
    $this->montantDebit = $montantDebit;
  }


  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM ABONNE');

    foreach($req->fetchAll() as $abonne) {
      $list[] = new Abonne($abonne['abo_codeAcces'], $abonne['abo_codeSecret'], $abonne['abo_codeAbonnement'], $abonne['abo_nom'], $abonne['abo_prenom'], $abonne['abo_dateDebutAbn'], $abonne['abo_dateFinAbn'], $abonne['abo_creditTemps'], $abonne['abo_montantDebit']);
    }
    return $list;
  }

}
?>
