<?php
require_once 'Lutador.php';
class Luta {
	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovar;

	public function marcarLuta($l1,$l2) {
		if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
			$this->aprovar = true;
			$this->desafiado = $l1;
			$this->desafiante = $l2;
		} else {
			$this->aprovar = false;
			$this->desafiado = null;
			$this->desafiante = null;
		}

	}

	public function lutar() {
		if ($this->getAprovar()) {
			$this->getDesafiante()->apresentar();
			$this->getDesafiado()->apresentar();
		}
		 $dados1 = $this->desafiante->dados();
		 $dados2 = $this->desafiado->dados();
		 $this->rounds = number_format(($dados1-$dados2)/2,0);
		 $randon = rand(0,10);
		echo $tot = $this->rounds + $randon;
		if ($randon = 0) {
			$this->desafiado->empatarLuta();
			$this->desafiante->empatarLuta();
		}
		if ($tot > 10) {
			$this->desafiante->ganharLuta();
			$this->desafiado->perderLuta();
		} elseif ($tot < 10) {
			$this->desafiado->ganharLuta();
			$this->desafiante->perderLuta();
		}
	}

	private function getDesafiado(){
		return $this->desafiado;
	}

	private function setDesafiado($desafiado) {
		$this->desafiado = $desafiado;
	}

	private function getDesafiante() {
		return $this->desafiante;
	}

	private function setDesafiante($desafiante) {
		$this->desafiante = $desafiante;
	}

	private function getRounds() {
		return $this->rounds;
	}

	private function setRounds($rounds) {
		$this->rounds = $rounds;
	}

	private function getAprovar() {
		return $this->aprovar;
	}

	private function setAprovar($aprovar) {
		$this->aprovar = $aprovar;
	}
}
?>