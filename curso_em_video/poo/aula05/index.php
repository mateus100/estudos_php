<html>
<head>
	<title>Conta de Banco</title>
</head>
<body>
	<pre>
<?php
spl_autoload_register(function($class){
require_once $class.'.php';
});
$t = "CP";
$jubileu = new banco("CC");
$jubileu->abrirConta("CC");
$jubileu->setNumConta(111);
$jubileu->depositar(300);
$jubileu->pagarMensal();
print_r($jubileu);
echo "<br/>";
$creuza = new banco($t);
$creuza->abrirConta($t);
$creuza->setNumConta(222);
$creuza->depositar(500);
$creuza->sacar(100);
$creuza->pagarMensal();

$creuza->sacar(100000);
print_r($creuza);
?>
	</pre>
</body>
</html>