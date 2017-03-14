<?php
	$dns = "mysql:dbname=controle;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
	 	$pdo = new pdo($dns,$dbuser,$dbpass);
	 	$sql = "SELECT * FROM usuarios";
	 	$pdo->query($sql);
	 } catch (PDOException $e) {
	 	echo "<p>Error</p>".$e->getMessage();
	 } 

?>