<?php
class funcionario extends pessoa {
	private $setor;
	private $trabalhando;

	public function mudarTrabalho($trabalho){
		$this->trabalhando = ! $this->trabalhando;
	}

	function getsetor() {
		return $this->setor;
	}

	function setSetor($setor) {
		$this->setor = $setor;
	}

	function getTrabalhando() {
		return $this->trabalhando;
	}

	function setTrabalhando($trabalhando) {
		$this->trabalhando = $trabalhando;
	}
}

?>
