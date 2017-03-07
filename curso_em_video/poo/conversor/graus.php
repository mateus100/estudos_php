<?php
	
	class Graus {
		private $cel;
		private $fahr;
		private $kel;
		function __construct(){
			$this->setCel(0);
			$this->setFar(0);
			$this->setKel(0);
		}

		public function converfar() {
		   $this->setCel($this->getFar() * 32);
		   echo number_format($this->getCel()/1.8, 2)."° Celsius<br/>";
		   clearstatcache();
		}

		public function converCel() {
			$this->setFar($this->getCel() * 1.8);
			echo number_format($this->getFar() + 32 ,2)."° Fahrenheit<br/>";
		}

		public function cel_to_kel() {
			
		}

		public function far_to_kel() {

		}

		public function kel_to_cel() {

		}

		public function kel_to_far () {

		}		

		public function getCel() {
			return $this->cel;
		}

		public function setCel($c) {
			$this->cel = $c;
		}

		public function getFar() {
			return $this->far;
		}

		public function setFar($far) {
			$this->far = $far;
		}

		public function getKel() {
			return $this->kel;
		}

		public function setKel($k) {
			$this->kel = $k;
		}
	}
?>