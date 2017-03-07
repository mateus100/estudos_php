<?php 
 class aboutController extends controller {

 		public function index() {
 			$dados = array();
 			$eu = new model();
 			$eu->setNome("Mateus");
 			$this->load("home",$dados);
 		    echo $eu->getNome()." Nasci em 22/03/1996";
 		}

 		public function morri() {
 			echo "Ainda não morri - em 2017";
 		}

 		public function sobre($nome) {
             echo "Eu sou o ".$nome;

 		}

 }

?>