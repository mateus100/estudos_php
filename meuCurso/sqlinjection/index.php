<?php
	$autor = addcslashes($_POST["autor"]);
	$sql = "SELECT * FROM postes WHERE 	autor = '$autor'";
?>