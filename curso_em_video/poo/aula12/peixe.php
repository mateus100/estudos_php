<?php
	require_once 'animal.php';
	 class Peixe extends Animal {
	 	private $corEscama;

	

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
	 		echo "Nadando";
	}

	 	public function alimentar() {
	 		echo "Comendo outros peixes e insetos";
	}

	    public function emitirSom() {
			echo "Blu blu";
	}

	    public function soltarBolhas() {
			echo "Soltou uma bolha";
		}

	 	protected function getcorEscama(){
		return $this->corEscama;
	}

	    protected function setcorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
}

?>