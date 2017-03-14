<?php
	abstract class Pessoa {
	 	protected $nome;
		protected $idade;
		protected $sexo;


		public final function completarAno() {
			$this->setIdade($this->getIdade() + 1);
		} 	

		function getNome() {
			return $this->nome;
		}

		function setNome($nome) {
			$this->nome = $nome;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}

		public function getSexo(){
			return $this->sexo;
		}

		public function setSexo($sexo) {
			$this->sexo = $sexo;
		}
	}
?>