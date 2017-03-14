<?php
	abstract class Pessoa {
		protected $nome;
		protected $idade;
		protected $sexo;
		protected $experiencia;

		public function __construct($nome,$idade,$sexo) {
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
			$this->setExperiencia(0);
		}

		protected function ganharExpe() {
	    	$this->setExperiencia($this->getExperiencia() + 2);
	    }

		function getNome() {
			return $this->nome;
		}

		function setNome($nome) {
			$this->nome = $nome;
		}

		function getIdade() {
			return $this->idade;
		}

		function setIdade($idade) {
			$this->idade = $idade;
		}

		function getSexo() {
			return $this->sexo;
		}

		function setSexo($sexo) {
			$this->sexo = $sexo;
		}

		function getExperiencia() {
			return $this->experiencia;
		}

		function setExperiencia($experiencia) {
			$this->experiencia = $experiencia;
		}
}
?>