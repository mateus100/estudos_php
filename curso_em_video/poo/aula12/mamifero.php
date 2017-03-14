<?php
	require_once 'animal.php';
 class Mamifero extends Animal {
	private $corPelo;

	public function Cor($cor) {
	 		$this->setcorPelo($cor);
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
	public function locomover() {
		echo "Andando";
	}

	public function alimentar() {
		echo "Mamando";
	}

	public function emitirSom() {
		echo "Som de mamifero";
	}

    protected function getCorPelo(){
		return $this->corPelo;
	}

	protected function setCorPelo($corPelo){
		$this->corPelo = $corPelo;
	}
} 

?>