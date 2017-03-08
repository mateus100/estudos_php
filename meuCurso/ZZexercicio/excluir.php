<?php
	session_start();

	require 'config.php';

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM usuarios WHERE id='$id'";

		$data->query($sql);
		header("location: home.php");
	} else {
		echo "Operação inválida";
	}
?>