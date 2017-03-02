<?php 

	class postesController extends controller {

	
	public function index() {
		

		echo "string";
	
	}		

	public function ler($noticia,$hora) {
		echo "<p>Nome da Notícia</p>"."<p>".$noticia."</p>";

		echo "<h4>".$hora."<h4>";
	}

}
?>