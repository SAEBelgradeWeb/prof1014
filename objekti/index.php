<?php  


class Ljudi {

	public $kosa = "crna";
	public $oci = "plave";

	public function trci(){
		echo "boja kose je " . $this->kosa;
	}


}

// $vlada = new Ljudi();

// $vlada->trci();

// $dragana = new Ljudi();

// $dragana->kosa = "plava";

// $dragana->trci();

class Crnogorci extends Ljudi {
	public function radi(){
		echo $this->kosa . " je lepa boja";
	}
}

$milo = new Crnogorci();

$milo->radi();