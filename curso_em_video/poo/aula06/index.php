<html>
<head>
	<title></title>
</head>
<body>
	<?php
	spl_autoload_register(function($class){
		require_once ($class.'.php');});
	$a = new controle();
	$a->ligar();
	$a->abrirMenu();
	?>
</body>
</html>