<?php
	require 'name.php';
	require 'name2.php';

	$sobre = new \app\v1\Sobre();
	$sobri = new \app\v2\Sobre();
	echo "<p>".$sobre->getVersao()."</p>";
	echo "<p>".$sobri->getVersao()."</p>";
?>