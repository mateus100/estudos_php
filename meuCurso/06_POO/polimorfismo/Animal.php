<?php
	class Animal {
		public function getNome() {
			echo "Nome";
		}
	}

	class cachorro extends Animal {
		public function getNome() {
			echo "<p>cachorro totó</p>";
		}
	}

?>