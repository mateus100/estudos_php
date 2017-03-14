<?php
class Pessoa {
	private $nome;
	private $idade;
	private $sexo;

	public function __construct($nome,$idade,$sexo) {
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);
	}

	public function fazerAno() {
		$this->setIdade($this->getIdade() + 1);
	}

	public function getNome() {
		return $this->nome;
	}

	private function setNome($nome) {
		$this->nome = $nome;
	}

	private function getIdade() {
		return $this->idade;
	}

	private function setIdade($idade) {
		$this->idade = $idade;
	}

	private function getSexo() {
		return $this->sexo;
	}

	private function setSexo($sexo) {
		$this->sexo = $sexo;
	}
}

?>