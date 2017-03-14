<?php
	require_once 'Conversor.php';
	$km = 10;
	$ml = 10;
	$hc = isset($_GET['hc'])?$_GET['hc']:0;
	$go = new Conversor($km,$ml);
	echo $go->calcMl($ml)."<br/>";
	echo $go->calckm($km)."<br/>";
	echo $go->calcMetro(10);

?>
