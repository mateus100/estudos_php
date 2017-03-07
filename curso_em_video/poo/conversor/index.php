<html lang="pt-br">
<head>
	<title>Conversor</title>
</head>
<body>
 <?php
	require_once 'graus.php';
	$con = new Graus();
	$con->setfar(1);
	$con->converfar();
	$con->setCel(1);
	$con -> converCel();
	$con->cel_to_kel();
	$con->far_to_kel();
 ?>
</body>
</html>