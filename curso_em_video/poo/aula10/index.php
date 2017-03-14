<html>
<head>
	<title></title>
</head>
<body>
<pre>
	<?php
       spl_autoload_register(function($class){
                 
	       require_once $class.".php";
       
       });
     
	$p[1] = new aluno;
	$p[2] = new professor;
	$p[3] = new funcionario;
	$p[1]->setNome("Pedro");
	$p[2]->setNome("Claudio");
	$p[3]->setNome("Fabiana");
	$p[0]->setNome("Deus");
	print_r($p);
	?>
</pre>
</body>
</html>
