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
	$this->desafiado->apresentar();
	$this->desafiante->apresentar();
	$vencedor = rand(0,2);
	switch ($vencedor) {
		case 0://empate
			$this->desafiante->empatarLuta();
			$this->desafiado->empatarLuta();
		case 1://desafiado vence
			echo " ".$this->desafiado->getNome()." venceu";
			$this->desafiado->ganharLuta();
			$this->desafiante->perderLuta();
			break;
		case 2://desafiante vence
			echo $this->desafiante->getNome()." venceu";
			$this->desafiante->ganharLuta();
			$this->desafiado->perderLuta();
			break;
	}
	}else {
		echo "Não haverá luta";
	}
 }

 	public function getDesafiado() {
 		return $this->desafiado;
 	}

 	public function setDesafiado($desafiado) {
 		$this->desafiado = $dd;
 	}

 	public function getDesafiante() {
 		return $this->desafiante;
 	}

 	public function setDesafiante($desafiante) {
 		$this->desafiante = $df;
 	}

 	public function getRouds() {
 		return $this->rounds;
 	}

 	public function setRouds($rounds) {
 		$this->rounds = $r; 
 	}

 	public function getaprovar() {
 		return $this->aprovar;
 	}

 	public function setAprovar($aprovar) {
 		$this->aprovar = $a;
 	}
}
?>