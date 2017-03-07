<?php
 require_once 'pessoa.php';

 	class Professor extends Pessoa {
 		private $especialidade;
 		private $salario;

 		public function receberAumento($aum){
 			$this->setSalario($this->getSalario() + $aum);
 		}

 		function getEspecialidade() {
 			return $this->especialidade;
 		}

 		function setEspecialidade($especialidade) {
 			$this->especialidade = $especialidade;
 		}

 		function getSalario() {
 			return $this->salario;
 		}

 		function setSalario($salario) {
 			$this->salario = $salario;
 		}
 	}
?>