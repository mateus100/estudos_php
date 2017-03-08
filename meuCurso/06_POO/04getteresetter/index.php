<?php
class Post {
	private $titulo;
	private $data;
	private $autor;
	private $corpo;
	private $comentário;

	public function __construct($t) {
		$this->setTitulo($t);
	}
	
	public function getTitulo() {
		return $this->titulo;
	}

	public function setTitulo($t) {
		if (is_string($t)) {		
		$this->titulo = $t;
	} else {
		echo "Seu título precisa ser com caracteres nada de 
		#@!$%&* ou coisas do tipo";
		}
	}
}

$post = new Post("História de joãozinho");
echo $post->getTitulo();
?>