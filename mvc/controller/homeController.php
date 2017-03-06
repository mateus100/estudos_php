<?php 
 
 class homeController extends controller {
 	public function index() {
        echo "string";
 	}

 	public function minhamae() {
 		$mode = new model();

 		$mode->setNome("Joana");

        $dados = array("Um" => $mode->getNome());
         
 		echo "O nome da minha mãe é: ".$mode->getNome();

 		$this->load("home", $dados);
 	}

 	public function casa() {
       $casa = new model();

       $casa->setNome("");

       $dados = array('nome' => $casa->getNome());

       $this->load("home", $dados);

    	

 	}
 }

?>