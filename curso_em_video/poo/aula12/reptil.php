<?php
	class Reptil extends Animal {
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
			echo "Andar e rastejar";
		}

		public function alimentar() {
			echo "Comer Porcaria";
		}

		public function emitirSom() {
			echo "raskaradsk";
		}

		protected function getCorEscama(){
			return $this->corEscama;
		}

		protected function setCorEscama(){
			$this->corEscama = $corEscama;
		}
}

?>