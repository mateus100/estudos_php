<?php
	class Aluno extends Pessoa {
		private $matr;
		private $curso;
		private $mensal;

		public  function pagarMensalidade() {
			$this->setMensal(true);
			echo "<p>Pago</p>";
		}

		public function getMensal() {
			return $this->mensal;
		}

		public function setMensal($mensal) {
			$this->mensal = $mensal;
		}

		public function getMatr(){
			return $this->matr;
		}

		public function setMatr($matr) {
			$this->matr = $matr;
		}

		public function getCurso() {
			return $this->curso;
		}

		public function setCurso($curso) {
			$this->curso = $curso;
		}
	}
	
?>