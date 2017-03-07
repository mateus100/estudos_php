<?php
require_once 'mamifero.php';

class Cachorro extends Mamifero {
	public function enterrarOsso() {
		echo "<p>Cavando canvando,
				Enterrando Osso...
		</p>";
	}

	public function abanarRabo() {
		echo "Abanhar rabo";
	}
}
?>