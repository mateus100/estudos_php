<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 02 Poo</title>
</head>
<body>
	<pre style="font-size:20px;">
<?php
spl_autoload_register(function($class){
	require_once($class.'.php');
});
$bic = new Caneta("Bic Cristal",0.5,"Azul",5);
$bic->escrever();
$bic->destampar();
$bic->rabiscar();
$bic->escrever();
?>
</pre>
</body>
</html>