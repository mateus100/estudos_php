<?php
	abstract class Animal {
		private $andar;
		private $qtd_patas;

		abstract protected function comer();

		protected function getAndar(){
			return $this->andar;
		}

		protected function setAndar($andar){
              $velocidade = "Parado";
              if ($andar <= 5) {
              	$velocidade = "Andando";
              } elseif ($andar <= 20) {
              	$velocidade = "galopando";
              } else {
              	$velocidade = "Correndo";
              }
			$this->andar = $velocidade;
		}

		protected function getQtd_Patas(){
			return $this->qtd_patas;
		}

		protected function setQtd_Patas($qtd_patas){
			$this->qtd_patas = $qtd_patas;
		}
	}

?>