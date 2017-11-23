<?php
class Plot{
	private $num;
	private $numStation;
	private $numVelo;

	public function __construct($num, $numStation, $numVelo){
		$this->num = $num;
		$this->numStation = $numStation;
		$this->numVelo = $nulVelo;
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

		public function getNumVelo(){
			return $this->numVelo;
		}
		public function setNumVelo($numVelo){
			$this->numVelo = $numVelo;
		}


		public static function all() {
	    $list = [];
	    $db = Db::getInstance();
	    $req = $db->query('SELECT * FROM PLOT');

	    foreach($req->fetchAll() as $plot) {
	      $list[] = new Abonne($plot['plt_num'], $plot['plt_numStation'], $plot['plt_numVelo']);
	    }
	    return $list;
	  }

}
