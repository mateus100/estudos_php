<html>
<head>
	<title></title>
</head>
<body>
	<pre>
<?php
  spl_autoload_register(function($class){
		require_once $class.'.php';
	});
	$p[0] = new Pessoa("José",32,"Masculino");
	$p[1] = new Pessoa("Maria",45,"Feminino");
	$l[0] = new Livro("Redes","MRM",400,$p[0]);
	$l[1] = new Livro("POO","JRN",700,$p[0]);
	$l[2] = new Livro("Construção","Carlão",100000,$p[1]);
	$l[0]->abrir();
	$l[0]->detalhes();

?>
 </pre>
</body>
</html>