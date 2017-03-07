<html>
<head>
	<meta charset="utf-8">
	<title>Zoo</title>
</head>
<body>
	<?php
	require_once 'ave.php';
	require_once 'mamifero.php';
	require_once 'peixe.php';
	require_once 'reptil.php';
	require_once 'canguru.php';
	require_once 'arara.php';
	require_once 'cobra.php';
	require_once 'cachorro.php';
	require_once 'tartaruga.php';
	require_once 'goldfish.php';

	$a = new Ave();
	$m = new Mamifero();
	$p = new Peixe();
	$r = new Reptil();
	$c = new Canguru();
	$t = new Tartaruga();
	$co = new Cobra();
	$arara = new Arara();
	$k = new Cachorro();
	$gf = new Goldfish();

	$m->peso(12);
	$m->cor("dourado");

	?>
</body>
</html>