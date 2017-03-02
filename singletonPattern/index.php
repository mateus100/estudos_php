<?php 

	class Pessoa {

		private $nome;

		private $idade;

		public static function getInstance() {

			$instance = null;

			if ($instance === null) {
				$instance = new Pessoa();
			}

			return $instance;
		}


		private function __construct() {

		}

		public  function getNome(){
			return $this->nome;
		}

		public function getIdade() {
			return $this->idade;
		}

		public function setNome($n) {
			return $this->nome = $n;
		}

		public function setIdade($i) {
			return $this->idade = $i;
		}
	}

	$c = Pessoa::getInstance();

	$c->setNome("Nome");

	$c2 = Pessoa::getInstance();

	$c2->setIdade(29);
	$c2->setNome("José");
	print_r($c2);

	echo $c->getNome();
?>