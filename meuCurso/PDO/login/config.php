<?php
	$dns = "mysql:dbname=blog;host:localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dns,$dbuser,$dbpass);
	} catch(PDOExepction $e) {
		echo "<p>Erro</p>".$e->getMessage();
	}

?>