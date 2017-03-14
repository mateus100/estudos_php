<?php
	class Lutador {
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;		

	public function __construct($n,$na,$id,$alt,$p,$vit,$em,$de) {
		$this->setNome($n);
		$this->setNacionalidade($na);
		$this->setIdade($id);
		$this->setAltura($alt);
		$this->setPeso($p);
		$this->setVitorias($vit);
		$this->setEmpates($em);
		$this->setDerrotas($de);
	}

	public function apresentar() {
		echo "<br>O lutador".$this->getNome()." Com ".$this->getVitorias()." ".$this->getDerrotas()." e ".$this->getEmpates()." vindo diretamente do seu país ".$this->getNacionalidade()."<br>";
	}

	public function status() {
		echo "<br>".$this->getIdade()." ".$this->getNome()." ".$this->getNacionalidade()." ".$this->getVitorias()." ".$this->getDerrotas()." ".$this->getEmpates();
	}

	public function ganharLuta() {
		$this->setVitorias($this->getVitorias() + 1);
	}


	public function perderLuta() {
		$this->setDerrotas($this->getDerrotas() + 1);
	}

	public function empatarLuta() {
		$this->setEmpates($this->getEmpates() + 1);
	}
	public function getNome() {
		return $this->nome;
	}

	private function setNome($n) {
		$this->nome = $n;
	}

	private function getNacionalidade() {
		return $this->nacionalidade;
	}

	private function setNacionalidade($na) {
		$this->nacionalidade = $na;
	}

	private function getIdade() {
		return $this->idade;
	}

	private function setIdade($ida) {
		$this->idade = $ida;
	}

	private function getAltura() {
		return $this->altura;
	}

	private function setAltura($al) {
		$this->altura = $al;
	}

	private function getPeso() {
		return $this->peso;
	}

	private function setPeso($p) {
		$this->peso = $p;

		$this->setCategoria($p);
	}

	public function getCategoria() {
		return $this->categoria;
	}

	private function setCategoria($cat) {
		$this->categoria = $cat;
		if($this->getPeso() <= 52.2) {
			$this->categoria = "Inválido";
		} elseif ($this->getPeso() <= 70.3) {
			$this->categoria = "Leve";
		} elseif ($this->getPeso() <= 83.9) {
			$this->categoria = "Médio";
		} elseif ($this->getPeso() <= 119){
			$this->categoria = "Pesado";
		 }elseif($this->getPeso() >= 120)  {
			$this->categoria = "Inválido";
		}
	}

	private function getVitorias() {
		return $this->vitorias;
	}

	private function setVitorias($vit) {
		$this->vitorias = $vit;
	}

	private function getDerrotas() {
		return $this->derrotas;
	}

	private function setDerrotas($de){
		$this->derrotas = $de;
	}

	private function getEmpates() {
		return $this->empates;
	}

	private function setEmpates($em) {
		$this->empates = $em;
	}
}
?>