<?php 
	class testeController extends controller {


		public function index() {
		 	
		 	$dados = array();
		 	
		 	$this->template('testando', $dados);
		 }
	}

?>