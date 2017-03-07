<?php
	require_once 'aluno.php';

	 class Bolsista extends Aluno {
		private $bolsa;

    	public function pagarMensalidade() {
		 	echo "<p>$this->nome <p>Bolsista: 20% de disconto</p>";
		}
		
		public function renovarBolsa(){
			echo "Bolsa renovada";
		}

		function getBolsa() {
			return $this->bolsa;
		}

		function setBolsa($bolsa) {
			$this->bolsa = $bolsa;
		}
	}
?>