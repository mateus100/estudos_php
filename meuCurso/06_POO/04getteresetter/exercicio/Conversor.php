<?php
	class Conversor {
		private $ml;
		private $km;
		private $metro;
		public function __construct($km,$ml) {
			$this->setKm($km);
			$this->setMl($ml);
		}


		public function calcMl() {
			return $this->getMl() * 1.6093;
		}

		public function calcKm() {
			return $this->getKm() / 1.6093;
		}

		public function calcMetro() {
			return $this->setMetro() * 1000;

		}

		public function getMetro() {
			return $this->metro;
		}

		public function setMetro($metro) {
			$this->metro = $metro;
		}

		public function getMl() {
			return $this->ml;
		}

		public function setMl($ml) {
			$this->ml = $ml;
		}

		public function getKm(){
			return $this->km;
		}

		public function setKm($km) {
			$this->km = $km;
		}
		
	}
?>