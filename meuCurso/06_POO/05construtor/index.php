<?php
class Post {
	private $titulo;
	private $data;
	private $autor;
	private $corpo;
	private $comentário;

	public function __construct($t){
		$this->setTitulo($t);
	}
	public function getTitulo() {
		return $this->titulo;
	}

	public function setTitulo($t) {		
		$this->titulo = $t;
 }
}

$post = new Post("Históriad de joãozinho");
echo $post->getTitulo();
?>