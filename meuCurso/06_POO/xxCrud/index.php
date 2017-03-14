<?php
	require_once 'db.php';

	$banco = new Banco("localhost","blog","root","root");
	$banco->query("SELECT * FROM postes");
	$numero = $banco->numRows();

	echo $numero;
?>