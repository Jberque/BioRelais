<?php
class Abonne {
  // we define 3 attributes
  // they are public so that we can access them using $abonne->nom directly
  public $id;
  public $nom;
  public $prenom;

  public function __construct($id, $nom, $prenom) {
    $this->id      = $id;
    $this->nom  = $nom;
    $this->prenom = $prenom;
  }

  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM abonnes');
            foreach($req->fetchAll() as $abonne) {
      $list[] = new Abonne($abonne['id'], $abonne['nom'], $abonne['prenom']);
    }

    return $list;
  }

  public static function find($id) {
    $db = Db::getInstance();
    $id = intval($id);
    $req = $db->prepare('SELECT * FROM abonnes WHERE id = :id');
    $req->execute(array('id' => $id));
    $abonne = $req->fetch();

    return new Abonne($abonne['id'], $abonne['nom'], $abonne['prenom']);
  }
}
?>
