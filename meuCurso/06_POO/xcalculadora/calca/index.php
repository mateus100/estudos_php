<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require_once "calculadora.php";
	$c = new Calca();
	$c->setNum(10);
	$c->Soma(2);
	$result = $c->result();
	echo $result;
	?>
</body>
</html>