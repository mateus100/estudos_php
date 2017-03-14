<?php
	require_once 'Calcinterface.php';

	class Calca implements CalcaI {
		private $num;

		public function Soma($value) {
			$this->num += $value;
			return $this;
		}

		public function Div($value) {
			$this->num /= $value;
			return $this;
		}

		public function Sub($value) {
			$this->num -= $value;
			return $this;
		}

		public function Mult($value) {
			$this->num *= $value;
			return $this;
		}

		public function result() {
			return $this->num;
		}

		 function getNum() {
			return $this->num;
		}

		 function setNum($num) {
			$this->num = $num;
		}
	}

?>