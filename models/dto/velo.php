<?php
class Velo{
	private $num;
	private $numStation;
	private $numOrdre;
	private $dmec;

	public function __construct($num, $numStation, $numOrdre, $dmec){
		$this->num = $num;
		$this->numStation = $numStation;
		$this->numOrdre = $numOrdre;
		$this->dmec = $dmec;
	}

	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		$this->num = $num;
	}

	public function getNumStation(){
		return $this->numStation;
	}
	public function setNumStation($numStation){
		$this->numStation = $numStation;
	}

	public function getNumOrdre(){
		return $this->numOrdre;
	}
	public function setNumOrdre($numOrdre){
		$this->numOrdre = $numOrdre;
	}

	public function getDmec(){
		return $this->dmec;
	}
	public function setDmec($dmec){
		$this->dmec = $dmec;
	}


	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM VELO');

		foreach($req->fetchAll() as $velo) {
			$list[] = new Velo($velo['vel_num'], $velo['vel_numStation'], $velo['vel_numOrdre'], $velo['vel_dmec']);
		}
		return $list;
	}

	public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM VELO WHERE vel_num = :id');
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));
		$post = $req->fetch();

		return new Velo($velo['vel_num'], $velo['vel_numStation'], $velo['vel_numOrdre'], $velo['vel_dmec']);
	}

}
