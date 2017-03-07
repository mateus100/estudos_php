<?php
	require_once 'animal.php';
 class Ave extends Animal {
	private $corPena;


	public function Cor($cor) {
	 	$this->setcorPena($cor);
	}

	public function peso($peso) {
		$this->setPeso($peso);
	}

	public function membros($membros) {
		$this->setMembros($membros);
	}

	public function idade($idade) {
		$this->setIdade($idade);
	}

	public function fazerNinho() {
		echo "Fez o ninho";
	}

	public function locomover() {
		echo "Voando";
		
	}

	public function alimentar() {
		echo "Comendo";
	}

	public function emitirSom() {
		echo "Som da ave";
	}

	protected function getcorPena(){
		return $this->corPena;
	}

	protected function setcorPena($corPena){
		$this->corPena = $corPena;
	}

}

?>