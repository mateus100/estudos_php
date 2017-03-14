<?php
	class Banco {
		private $pdo;
		private $numrows;
		private $array;
		public function __construct($host,$dbname, $dbpassword) {
			try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$dbname, $dbpassword);
		     }catch(PDOException $e) {
		     	echo "Falhou: ".$e->getMessage();
		     }
		}

		    public function query($sql) {

		    	$query = $this->pdo->query($sql);
		    	$this->numrows = $query->rowCount();
		    	
		    }

		    public function numRows() {
		    	return $this->numrows;
		    }
		
	}

?>