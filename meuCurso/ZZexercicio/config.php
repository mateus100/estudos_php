<?php
	$dns = "mysql:dbname=controle;host:localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$data = new pdo($dns,$dbuser,$dbpass);
	} catch (Exception $e) {
		echo "<p>Erro</p>".$e->Message();
	}
?>