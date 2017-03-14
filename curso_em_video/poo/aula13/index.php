<html>
<head>
	<title></title>
</head>
<body>
	<h1>
 <?php
 require_once 'mamifero.php';
 require_once 'cachorro.php';
 $m = new Mamifero();
 $c = new Cachorro();
 $m->emitirSom();
 $c->reagirFrase("Olá");
 $c->reagirHora(12);
 $c->reagirDono(true);
 $c->reagirIdadePeso(12,60);
 ?>
	</h1>
</body>
</html>