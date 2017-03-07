<?php
	require_once 'video.php';
	require_once 'gafanhoto.php';
	class Visualizacao {
		private $espectador;
		private $filme;

	public function __construct($espectador,$filme) {
		$this->setEspectador($espectador);
		$this->setFilme($filme);
		$this->filme->setViews($this->filme->getViews() + 1);
		$this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
	}

	public function avaliar() {
		$this->filme->setAvaliacao(5);
	}

	public function avaliarNota($nota) {
		$this->filme->setAvaliacao($nota);
	}

	public function avaliarProc($proc) {
		$nova = 0;

		if ($proc <= 20) {
			$nova = 3;
		} elseif ($proc < 50) {
			$nova = 5;
		} elseif ($proc <= 90) {
			$nova = 8;
		} else{
			$nova = 10;
		}

		$this->getFilme()->setAvaliacao($nova);
	}

	public function getEspectador(){
			return $this->espectador;
	}

	public function setEspectador($espectador) {
		$this->espectador = $espectador;
	}

	public function getFilme() {
		return $this->filme;
	}

	public function setFilme($filme) {
		$this->filme = $filme;
	}
}
?>