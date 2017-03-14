<?php
	require_once 'interVideo.php';
	class Video implements AcoesVideo {
		private $titulo;
		private $avaliacao;
		private $views;
		private $curtidas;
		private $reproduzindo;

		public function __construct($titulo) {
			$this->setTitulo($titulo);
			$this->avaliacao = 0;
			$this->views = 0;
			$this->curtidas = 0;
			$this->reproduzindo = false;
		}

		public function play() {
			$this->setViews($this->getViews() + 1);
			if ($this->reproduzindo = false) {
				$this->setReproduzindo(true);
			} else {
				$this->setReproduzindo(true);
			}
		}

		
		public function pause() {
			$this->reproduzindo = false;
		}

		public function like() {
			$this->curtidas++;
		}

		function getTitulo() {
			return $this->titulo;
		}

		function setTitulo($titulo) {
			return $this->titulo = $titulo;
		}

		function getAvaliacao() {
			return $this->avaliacao;
		}

		function setAvaliacao($avaliacao) {
			$media = ($this->avaliacao + $avaliacao)/$this->views;
			$this->avaliacao = $media;
		}

		function getViews() {
			return $this->views;
		}

		function setViews($views) {
			$this->views = $views;
		}

		function getCurtidas() {
			return $this->curtidas;
		}

		function setCurtidas($curtidas) {
			$this->curtidas = $curtidas;
		}

		function getReproduzindo() {
			return $this->reproduzindo;
		}

		function setReproduzindo($reproduzindo) {
			$this->reproduzindo = $reproduzindo;
		}
	}

?>
