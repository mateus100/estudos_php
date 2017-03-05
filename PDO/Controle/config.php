<?php
	$dns = "mysql:dbname=controle;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new pdo($dns,$dbuser,$dbpass);
	} catch (PDOException $e) {
		echo "<p>Conexão não encontrada</p>".$e->getMessage();
	}
	
?>