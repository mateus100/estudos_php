<?php
	require_once 'icaneta.php';
	class Caneta implements Icaneta {
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		private function __construct() {

		}

		public static function getInstance() {
			$instance = null;

			if ($instance  === null) {
				$instance = new Caneta();
			}

			return $instance;
		}



		function rabiscar() {
			if ($this->tampada) {
				echo "Erro não pode rabiscar<br>";
			} else {
				echo "Pode Rabiscar<br>";
			}
		}

		function tampar() {
			$this->tampada = true;
			echo "Tampou<br>";
		}

		function destampar() {
			$this->tampada = false;
			echo "Destampou <br>";
		}

		public function getModelo() {
			return $this->modelo;
		}

		public function getCor() {
			return $this->cor;
		}

		public function getPonta() {
			return $this->ponta;
		}

		public function getCarga() {
			return $this->carga;
		}

		public function getTampada() {
			return $this->tampada;
		}

		public function setModelo($m) {
			return $this->modelo = $m;
		}

		public function setCor($c) {
			return $this->cor = $c;
		}

		public function setPonta($p) {
			return $this->ponta = $p;
		}

		public function setCarga($carga) {
			return $this->carga = $carga;
		}

		public function setTampada($t) {
			return $this->tampada = $t;
		}

	}

?>
