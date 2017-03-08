<?php

	class Banco {
		private $pdo;

		public function __construct($host,$dbname, $dbuser, $dbpass) {
			try {
				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$dbuser,$dbpass);
			} catch(PDOExepction $e) {
				echo "<p>ERROR</p>".$e->getMessage();
			}
		}

	    public function query($sql) {
	    	$query = $this->pdo->query($query);
		}
	}

?>










