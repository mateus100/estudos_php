<?php
	class Banco {
		private $pdo;
		private $numRows;
		private $array;

		function __construct($dbname,$host,$dbuser,$dbpassword) {
			try {
				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$dbuser,$dbpassword);
			} catch (Exception $e) {
				echo "<p>Errou</p>".$e->getMessage();
			}
		}
		public function query($sql) {
			$query = $this->pdo->query($sql);
			$this->numRows = $query->rowCount();
			$this->array = $query->fetchAll();
		}

		public function numRow() {
			return $this->numRows;
		}

		public function result() {
			return $this->array;
		}
		
		public function insert($table, $data) {
			if (!empty($table) && (is_array($data) && count($data) > 0)) {
				
                $sql = "INSERT INTO ".$table." SET "; 
				$dado = array();
				foreach ($data as $chave => $valor) {
					$dado[] = $chave." = '".addslashes($valor)."'";
					
				}
				$sql = $sql.implode(" , ", $dado);
				$this->pdo->query($sql);
			}
		}
		public function update($table, $data, $where = array(), $where_cond = "AND") {
					if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)) {
						$sql = "UPDATE ".$table." SET ";
						$dado = array();
						foreach ($data as $key => $value) {
							$dado[] = $key." = '".addslashes($value)."'";
						}

						$sql = $sql.implode(", ",$dado);
						
						if(count($where) > 0) {
						$dado = array();
						foreach ($where as $key => $value) {
							$dado[] = $key." = '".addslashes($value)."'";
						}
						$sql = $sql." WHERE ".implode(" ".$where_cond." ",$dado);
					}
		 	    } $sql = $this->pdo->query($sql);
		 	}

		 public function delete($table, $where, $where_cond = "AND") {
		if(!empty($table) && ( is_array($where) && count($where) > 0 )) {
			$sql = "DELETE FROM ".$table;

			if(count($where) > 0) {
				$dados = array();
				foreach($where as $chave => $valor) {
					$dados[] = $chave." = '".addslashes($valor)."'";
				}
				$sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
			}

			 $sql = $this->pdo->query($sql);
		  }
		}

		
}
?>