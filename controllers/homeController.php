<?php 
	class homeController extends controller {


		public function index() {
		 
		 	$pessoas = new usuario();

		 	$dados['pessoas'] = $pessoas->getPessoas();

		 	$this->template('home', $dados);
		 }


		public function sobre() {
			$dados = array();

			$this->views('sobre',$dados);
		}

		public function teste() {
			echo "Testando";
		}
	}

?>