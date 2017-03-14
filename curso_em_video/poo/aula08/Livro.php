<?php
	spl_autoload_register(function($class){require_once ($class.'.php');});
	class Livro implements publicacao {
		private $titulo;
		private $autor;
		private $totPag;
		private $pagAtual;
		private $aberto;
		private $leitor;


	public function __construct($titulo, $autor, $totPag,$leitor) {
		$this->setTitulo($titulo);
		$this->setAutor($autor);
		$this->setTotPag($totPag);
		$this->setPagAtual(0);
		$this->setLeitor($leitor);
	}	

	public function abrir() {
		if ($this->getAberto(false)) {
		$this->setAberto(true);
		$this->setPagAtual($this->getPagAtual() + 1);
		}
	}

	public function fechar() {
		if ($this->getAberto()) {
		$this->setAberto(false);
	}
}
	public function folhear($i) {
		for ($i=0; $i < $this->getTotpag() ; $i++) { 
				$this->setPagAtual($this->getPagAtual() + $i);
		}
	}

	public function avancarPag() {
		if ($this->getPagAtual() < $this->getTotpag()) {
		$this->setPagAtual($this->getPagAtual() + 1);
	 } else {
	 		echo "Fim do livro";
	 }
	}

	public function voltarPag() {
		$this->setPagAtual($this->getPagAtual() - 1);
	}

	public function  detalhes() {
		echo " Título ".$this->getTitulo()." Autor: ".$this->getAutor()." Páginas: ".$this->getTotpag()." Página Autal: ".$this->getPagAtual()." Sendo lido por: ".$this->leitor->getNome();
	}

	private function getTitulo() {
		return $this->titulo;
	} 

	private function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	private function getAutor() {
		return $this->autor;
	} 

	private function setAutor($autor) {
		$this->autor = $autor;
	}

	private function getTotpag() {
		return $this->totPag;
	} 

	private function setTotPag($totPag) {
		$this->totPag =$totPag;
	}

	private function getPagAtual() {
		return $this->pagAtual;
	} 

	private function setPagAtual($pagAtual) {
		$this->pagAtual = $pagAtual;
	}

	private function getAberto() {
		return $this->aberto;
	} 

	private function setAberto($aberto) {
		$this->aberto = $aberto;
	}

	private function getLeitor() {
		return $this->leitor;
	} 

	private function setLeitor($leitor) {
		$this->leitor = $leitor;
	}
}
?>