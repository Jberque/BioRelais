<?php
class Station{
	private $num;
	private $nom;
	private $situation;
	private $capacite;
	private $numBorne;

	public function __construct($num, $nom, $situation, $capacite, $numBorne){
		$this->num = $num;
		$this->nom = $nom;
		$this->situation = $situation;
		$this->capacite = $capacite;
		$this->numBorne = $numBorne;
	}

	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		$this->num = $num;
	}

	public function getNom(){
		return $this->nom;
	}
	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getSituation(){
		return $this->situation;
	}
	public function setSituation($situation){
		$this->situation = $situation;
	}

	public function getCapacite(){
		return $this->capacite;
	}
	public function setCapacite($capacite){
		$this->capacite = $capacite;
	}

	public function getNumBorne(){
		return $this->numBorne;
	}
	public function setNumBorne($numBorne){
		$this->numBorne = $numBorne;
	}


	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM STATION');

		foreach($req->fetchAll() as $station) {
			$list[] = new Station($station['sta_num'], $station['sta_nom'], $station['sta_situation'], $station['sta_capacite'], $station['sta_numBorne']);
		}
		return $list;
	}

	public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM STATION WHERE sta_num = :id');
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));
		$post = $req->fetch();

		return new Station($station['sta_num'], $station['sta_nom'], $station['sta_situation'], $station['sta_capacite'], $station['sta_numBorne']);
	}

}

?>
