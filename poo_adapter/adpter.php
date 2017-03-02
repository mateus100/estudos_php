<?php 
	
	class pessoa {
		private $nome;

		private $idade;

		public function __construct($nome, $idade) {
			$this->setNome($nome);

			$this->setIdade($idade);
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
?>
<pre>
<?php
	class PessoaAdapter {
		private $qi;

		private $pessoa;

		public function __construct(pessoa $pessoa) {

			$this->pessoa = $pessoa;

		}

		public function setQi($qi) {

			$this->qi = $qi;

		}

		public function getQi() {
			return $this->qi;
		}

		public function getNome() {
			return $this->pessoa->getNome();
		}

		public function getIdade() {
			return $this->pessoa->getIdade();
		}
	}

	$pessoa = new pessoa("José da silva", 1500);

	$pa = new PessoaAdapter($pessoa);

	$pa->setQi(12);

	print_r($pa);

?>
</pre>