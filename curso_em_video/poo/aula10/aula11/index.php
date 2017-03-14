<html>
<head>
	<title>Escola do Bem</title>
</head>
<body>
	<pre>
 <?php
 	require_once 'pessoa.php';
 	require_once 'visitante.php';
 	require_once 'aluno.php';
 	require_once 'bolsista.php';
 	require_once 'tecnico.php';
 	$a = new Aluno;
    $t = new Tecnico;
    $t->cursando("Inglês");
    print_r($t);
 	$a->pagarMensalidade();


 ?>
 </pre>
</body>
</html>