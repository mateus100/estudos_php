<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	pre {
		font-size: 18px;
	}
	</style>
</head>
<body>
	<pre>
	<?php

	//esse programa serve para as aulas 14 & 15
	require_once 'video.php';
	require_once 'gafanhoto.php';
	require_once 'visualizacao.php';
	$g[0] = new Gafanhoto("João",21,"Gafanhoto","Joaojacare");
	$g[0]->maisUmVideo();
	$v[0] = new Video("A bola azul");
	$v[1] = new Video("A casa azul");
	$v[2] = new Video("O carro azul");
	$visu = new Visualizacao($g[0],$v[2]);
	$visu->avaliar(13);
	
	$v[0]->play();
	$v[0]->like();
	print_r($visu);

	?>
 </pre>
</body>
</html>