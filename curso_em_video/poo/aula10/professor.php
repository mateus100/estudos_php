<?php
	class professor extends pessoa {
		private $area;
		private $salario;

		public function receberAumento($aumento) {
			$this->setSalario($this->getSalario() + $aumento);
		}

		function getArea() {
			return $this->area;
		}

		function setArea($area) {
			$this->area = $area;
		}

		function getSalario() {
			return $this->salario;
		}

		function setSalario($salario) {
			$this->salario = $salario;
		}
	}
?>
