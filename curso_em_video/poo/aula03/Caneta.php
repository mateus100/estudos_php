<?php
	class Caneta {
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function escrever() {
			if ($this->tampada = false) {
				echo "Rabiscando";
			}
		}

		public function rabiscar() {
			if ($this->tampada) {
				echo "Erro não pode rabiscar<br>";
			} else {
				echo "Pode Rabiscar<br>";
			}
		}

		public function tampar() {
			$this->tampada = true;
			echo "Tampou<br>";
		}

		public function destampar() {
			$this->tampada = false;
			echo "Destampou <br>";
		}
	}
?>