<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
 	function soma($a, $b) {
 		return $a + $b;
 		
 	}
 	$x = isset($_GET['x'])?$_GET['x']:0;
 	$y = isset($_GET['y'])?$_GET['y']:0;
 	$res = soma($x, $y);
 	echo "A soma de $x e $y vale: $res";
 	?>
 	<br> <br>
 	<a href="exercicio1.html">Voltar</a>
</div>
</body>
</html>
 