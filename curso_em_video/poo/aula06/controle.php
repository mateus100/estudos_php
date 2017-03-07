<?php
	require_once 'controlador.php';
	class Controle implements Controlador {
		private $volume;
		private $ligado;
		private $tocando;

		
		private function getVolume() {
			return $this->volume;
		}

		private function getLigado() {
			return $this->ligado;
		}

		private function getTocando() {
			return $this->tocando;
		}

		private function setVolume($v) {
			$this->volume = $v;
		}

		private function setLigado($l) {
			$this->ligado = $l;
		}
		private function setTocando($t) {
			$this->tocando = $t;
		}
        public function __construct() {
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
		}

		public function ligar(){
			$this->setLigado(true);
		}

		public function desligar(){
			$this->setLigado(false);
		}

		public function abrirMenu(){
			echo ($this->getLigado()?"SIM":"NÃO")."<br>";
			echo ($this->getTocando()?"SIM":"NÃO")."<br>";	

			for($i = 0; $i <= $this->getVolume(); $i++) { 
				echo "|";
			}
			echo "<br>";
			echo $this->getTocando();
		}

		public function fecharMenu(){
			echo "<br/> Bye";
		}

		public function maisVolume() {
			if($this->getLigado()) {
				$this->setVolume($this->getVolume() + 1);
			}
		}

		public function menosVolume() {
			if($this->getLigado()) {
				$this->setVolume($this->getVolume() - 1);
			}
		}

		public function ligarMudo(){
			if($this->getLigado() && $this->getTocando() > 0){
				$this->setVolume($this->getTocando() - $this->getTocando());
			}
		}

		public function desligarMudo(){
			if($this->getLigado() == false && $this->getTocando() == 0) {
				$this->setVolume(50);
			}
		}

		public function play() {
			if($this->getLigado() && !($this->getTocando())) {
				$this->setTocando(true);
			}
		}

		public function pause() {
			if($this->getLigado() && $this->getTocando()) {
				$this->setTocando(false);
			}	
		}


	}
?>