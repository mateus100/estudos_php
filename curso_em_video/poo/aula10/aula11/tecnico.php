<?php
 require_once 'aluno.php';

 	class Tecnico extends Aluno {
 		private $registroProfissional;

 		public function praticar() {
 			for ($i=0; $i <= 10 ; $i++) { 
 					echo "<p>(° ? °)_\</p>";
 					echo "<p>(° ? °)_/</p>";
 			}
 		}

 		public function cursando($curse) {
 			$this->setCurso($curse);
 		}

 		function getRegistroProfissional() {
 			return $this->registroProfissional;
 		}

 		function setRegistroProfissional($registroProfissional) {
 			$this->registroProfissional = $registroProfissional;
 		}
 	}
?>