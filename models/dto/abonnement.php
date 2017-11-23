<?php
class Abonnement{
  // On pourrait mettre en public pour directement y accéder avec $abonnement->code ou les modifier avec $abonnement->code = "code1"
  private $code;
  private $libelle;
  private $duree;
  private $montant;
  private $creditTempsBase;
  private $tarifHoraire;
  private $caution;
  private $type;


  public function __construct($coden, $libelle, $duree, $montant, $creditTempsBase, $tarifHoraire, $caution, $type){
    $this->code = $code;
    $this->libelle = $libelle;
    $this->duree = $duree;
    $this->montant = $montant;
    $this->creditTempsBase = $creditTempsBase
    $this->tarifHoraire = $tarifHoraire;
    $this->caution = $caution;
    $this->type = $typeA;
  }

  public function getCode(){
    return $this->code;
  }
  public function setCode($code){
    $this->code = $code;
  }

  public function getLibelle(){
    return $this->libelle;
  }
  public function setLibelle($libelle){
    $this->libelle = $libelle;
  }

  public function getDuree(){
    return $this->duree;
  }
  public function setDuree($duree){
    $this->duree = $duree;
  }

  public function getMontant(){
    return $this->montant;
  }
  public function setMontant($montant){
    $this->montant = $montant;
  }

  public function getCreditTemps(){
    return $this->creditTemps;
  }
  public function setCreditTemps($creditTempsBase){
    $this->creditTemps = $creditTempsBase;
  }

  public function getTarifHoraire(){
    return $this->tarifHoraire;
  }
  public function setTarifHoraire($tarifHoraire){
    $this->tarifHoraire = $tarifHoraire;
  }

  public function getCaution(){
    return $this->caution;
  }
  public function setCaution($caution){
    $this->caution = $caution;
  }

  public function getType(){
    return $this->type;
  }
  public function setType($type){
    $this->type = $type;
  }

  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM ABONNEMENT');

    foreach($req->fetchAll() as $abonnement) {
      $list[] = new Abonne($abonnement['abn_code'], $abonnement['abn_libelle'], $abonnement['abn_duree'], $abonnement['abn_montant'], $abonnement['abn_creditTempsBase'], $abonnement['abn_tarifHoraire'], $abonnement['abn_caution'], $abonnement['abn_type']);
    }
    return $list;
  }

  public static function find($id) {
    $db = Db::getInstance();
    $id = intval($id);
    $req = $db->prepare('SELECT * FROM ABONNEMENT WHERE abn_code = :id');
    $req->execute(array('id' => $id));
    $abonne = $req->fetch();

    return new Abonne($abonnement['abn_code'], $abonnement['abn_libelle'], $abonnement['abn_duree'], $abonnement['abn_montant'], $abonnement['abn_creditTempsBase'], $abonnement['abn_tarifHoraire'], $abonnement['abn_caution'], $abonnement['abn_type']);
  }

}
?>
