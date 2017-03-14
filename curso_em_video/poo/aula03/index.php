<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 02 Poo</title>
</head>
<body>
<?php
require_once "Caneta.php";
$bic = new Caneta();
$bic->rabiscar();
$bic->destampar();
$bic->rabiscar();
$bic->tampar();
?>

</body>
</html>