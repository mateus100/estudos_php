<?php
$dns = "mysql:db=blog;host=127.0.0.1";
$dbuser= "root";
$dbpass= "";

try {
	$banco = new PDO($dns,$dbuser,$dbpass);
	echo "Deu certo";

} catch (PDOexception $e) {
	echo "Falou: ".$e->getMenssage();
}
?>