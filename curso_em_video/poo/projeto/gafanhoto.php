<?php
	require_once 'pessoa.php';
	class Gafanhoto extends Pessoa {
		private $login;
		private $totAssistido;

		public function __construct($nome,$idade,$sexo,$login) {
			parent::__construct($nome,$idade,$sexo);
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
			$this->setLogin($login);
			$this->setExperiencia(0);
		}

		public function maisUmVideo() {
			$this->setTotAssistido($this->getTotAssistido() + 1);
			$this->setExperiencia($this->getExperiencia() + 1);
		}

		public function getLogin(){
			return $this->login;
		}

		public function setLogin($login) {
			$this->login = $login;
		}

		public function getTotAssistido() {
			return $this->totAssistido;
		}

		public function setTotAssistido($totAssistido) {
			$this->totAssistido = $totAssistido;
		}
	}
?>