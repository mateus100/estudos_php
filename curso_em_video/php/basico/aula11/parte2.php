<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Parte 2</title>
</head>
<body>
<div>
	<?php 
	$i = 1;

	while ($i <= 10) {
		$v = "num".$i;
		$url = "v".$i;
		$$v = isset($_GET[$url])?$_GET[$url]:0;
		$i++;
	}

	$i = 1;

	while ($i <= 10) {
		$v = "num".$i;
		echo "Valor $i: ".$$v."<br/>";
		$i++;
	}
	 ?>
</div>
</body>
</html>