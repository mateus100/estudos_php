<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 02 Poo</title>
</head>
<body>
<?php
spl_autoload_register(function($class)
{
	require_once $class.".php";
});

$bic = Caneta::getInstance();
$bic->tampada = true;
$bic->rabiscar();
$bic->destampar();
$bic->rabiscar();
$bic->tampar();
$bic->setCor("Preta");



print_r($bic);

$bic2 = new AdapterCaneta();
?>

</body>
</html>