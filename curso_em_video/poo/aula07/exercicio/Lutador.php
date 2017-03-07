<?php
	class Lutador {
		private $nome;
		private $idade;
		private $peso;
		private $altura;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;

		public function __construct($nome,$idade,$peso,$altura,$vitorias,$derrotas,$empates) {
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setPeso($peso);
			$this->setAltura($altura);
			$this->setVitorias($vitorias);
			$this->setDerrotas($derrotas);
			$this->setEmpates($empates);
		}
		public function dados() {
			return abs(($this->getPeso() - $this->getAltura()) + ($this->getVitorias() + $this->getEmpates()) - $this->getDerrotas()); 
		}

 		public function status() {
			echo "<p>----------------------</p>";
			echo " Nome: ".$this->getNome()." Idade: ".$this->getIdade()." Categoria: ".$this->getCategoria()." Vitorias: ".$this->getVitorias()." Derrotas: ".$this->getDerrotas()." Empates: ".$this->getEmpates();
			echo "<p>----------------------</p>";
		}

		public function apresentar() {
			echo "<p>----------------------</p>";
			echo " Ai vem O Lutador ".$this->getNome()." com a idade de: ".$this->getIdade()." da categoria peso ".$this->getCategoria()." Vitorias: ".$this->getVitorias()." Derrotas: ".$this->getDerrotas()." Empates: ".$this->getEmpates();
			echo "<p>----------------------</p>";
		}
		
		public function ganharLuta() {
			$this->setVitorias($this->getVitorias() + 1);
		}

		public function empatarLuta() {
			$this->setEmpates($this->getEmpates() + 1);
		}

		public function perderLuta() {
			$this->setDerrotas($this->getDerrotas() + 1);
		}

		public function getNome(){
			return $this->nome;
		}

		private function setNome($nome){
			$this->nome = $nome;
		}
        
        public function getIdade(){
			return $this->idade;
		}

		private function setIdade($idade){
			$this->idade = $idade;
		}

		public function getPeso(){
			return $this->peso;
		}

		private function setPeso($peso){
			$this->peso = $peso;
			$this->setCategoria($peso);
		}

		public function getAltura(){
			return $this->altura;
		}

		private function setAltura($altura){
			$this->altura = $altura;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		private function setCategoria($categoria){
			$this->categoria = $categoria;
			if ($this->peso <= 53) {
				$this->categoria = "Inválido";
			} elseif($this->peso <= 70) {
				$this->categoria = "Leve";
			} elseif($this->peso <= 84) {
				$this->categoria = "Médio";
			} elseif ($this->peso <= 110) {
				$this->categoria = "Pesado";
			} elseif ($this->peso > 110) {
				$this->categoria = "Inválido";
			}
 		}

		public function getVitorias(){
			return $this->vitorias;
		}

		private function setVitorias($vitorias){
			$this->vitorias = $vitorias;
		}

		public function getDerrotas(){
			return $this->derrotas;
		}

		private function setDerrotas($derrotas){
			$this->derrotas = $derrotas;
		}

		public function getEmpates(){
			return $this->empates;
		}

		private function setEmpates($empates){
			$this->empates = $empates;
		}
	}
?>