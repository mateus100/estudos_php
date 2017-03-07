<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<?php
		//func 14 strtolower

		$nome = "Mateus Moreira";
		printf("Seu nome é ".strtolower($nome)."\n"); //
		//$nome2 = strtolower($nome);
		//printf("Seu nome é: ".$nome2);

		echo "<br>";
		$nome = "Mateus Moreira";
		print("Seu nome é: ".strtoupper($nome));
		echo "<br>";
		$nome = "mateus Moriera";
		print("Seu nome é: ".ucfirst($nome));
		echo "<br>";
		$nome = "mateus moreira";
		print("Seu Nome é: ".ucwords($nome));
		
		echo "<br>";
		$nome = "Mateus Moreira";
		print("Seu nome ao contrário é :".strrev($nome));
		?>
	</div>
</body>
</html>