<?php
class Emprunter{
  private $codeAcces;
  private $codeSecret;
  private $numV;
  private $date;
  private $heure;
  private $duree;

  public function __construct($unCodeAcces = NULL , $unCodeSecret = NULL, $unNumV = NULL , $uneDate = NULL, $uneHeure = NULL , $uneDuree = NULL){
    $this->codeAcces = $unCodeAcces;
    $this->codeSecret = $unCodeSecret;
    $this->numv = $unNumv;
    $this->date = $uneDate;
    $this->heure = $uneHeure;
    $this->duree = $uneDuree;
  }

  public function getCodeAcces(){
    return $this->codeAcces;
  }

  public function getCodeSecret(){
    return $this->codeSecret;
  }

  public function getNumV(){
    return $this->numv;
  }

  public function getDate(){
    return $this->date;
  }

  public function getHeure(){
    return $this->heure;
  }

  public function getDuree(){
    return $this->duree;
  }
  ?>
