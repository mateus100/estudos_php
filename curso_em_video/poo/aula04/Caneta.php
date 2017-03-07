<?php
	class caneta {
		public $modelo;
		public $cor;
		private $ponta;
		private $carga;
		private $tampada;

		public function __construct($m,$p,$cr,$c) {
			$this->tampar();
			$this->setModelo($m);
			$this->setPonta($p);
			$this->setCor($cr);
			$this->setCarga($c);
		}

		public function escrever() {
			if ($this->getTampada() == false) {
				echo "Escrevendo<br>";
			} elseif($this->getTampada() == true) {
				echo "Caneta tampada<br>";
			}
		}

		public function rabiscar() {
			if ($this->getTampada()) {
				echo "Erro não pode rabiscar<br>";
			} elseif($this->getTampada() == false) {
				$i = 0;
				while ($i <= 3) {
					 $i++;
					echo "Rabisco<br>";
				}

			}
		}

		public function tampar() {
			$this->setTampada(true);
		}

		public function destampar() {
			$this->setTampada(false);
			echo "Destampou <br>";
		}

		public function getModelo() {
			return $this->modelo;
		}

		public function setModelo($m) {
			$this->modelo = $m;
		}

		public function getCor() {
			return $this->cor;
		}

		public function setCor($cr) {
			$this->cor = $cr;
		}

		public function getPonta() {
			return $this->ponta;
		}

		public function setPonta($p) {
			$this->ponta = $p;
		}

		public function getCarga() {
			return $this->carga;
		}

		public function setCarga($c) {
			$this->carga = $c;
		}
 
 		public function getTampada() {
			return $this->tampada;
		}

		public function setTampada($t) {
			$this->tampada = $t;
		}
	}
?>
