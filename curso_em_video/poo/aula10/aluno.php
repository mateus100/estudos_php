<?php
	require_once 'pessoa.php';
	class Aluno extends Pessoa{
		private $matricula;
		private $curso;

		public function cancelarMatricula(){
				$this->setMatricula(false);
				$this->setCurso("Cancelado");
		}
		function getMatricula() {
			return $this->matricula;
		}

		function setMatricula($matricula) {
			$this->matricula = $matricula;
		}

		function getCurso() {
			return $this->curso;
		}

		function setCurso($curso) {
			$this->curso = $curso;
		}
	}
?>