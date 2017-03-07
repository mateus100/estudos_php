<?php
require_once 'lobo.php';

class cachorro extends Lobo {
	public function emitirSom() {
		echo "p>Au! au! auu!</p>";
	}

	public function reagirFrase($frase) {
		if ($frase = "Comida" || $frase = "Olá") {
			echo "<p>Abanar o rabo e latir</p>";
		} else {
			echo "<p>rosnar</p>";
		}
	}

	public function reagirHora($hora) {
		if ($hora > 12) {
			echo "<p>Abanar o rabo e latir</p>";
		} elseif($hora>=18) {
			echo "<p>Ignorar</p>";
		} else {
			echo "<p>rosnar</p>";
		}

	}

	public function reagirDono($dono) {
		if ($dono) {
			echo "<p>Abanar o rabo</p>";
		} else {
			echo "<p>rosnar</p>";
		}
	}

	public function reagirIdadePeso($idade,$peso) {
			if ($idade < 5 && $peso < 10) {
			echo "<p>Abanar o rabo</p>";
		} elseif($peso< 10) {
			echo "<p>rosnar</p>";
		} elseif ($idade > 10 && $peso > 50) {
			echo "Ignorar (Cachorro réi)";	
		}
	}
}

?>