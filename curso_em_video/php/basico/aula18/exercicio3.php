<html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
 	<title>Array</title>
 </head>
 <body>
 	<div>
 		<?php
 		$v = array(0 => 'A', 1 => 'B', 2 => 'C', 3 => 'D');

 		$cad = array ('nome' => "Zezé",
 			"idade" => 1000,
 			"peso" => 80.6);
 		foreach ($cad as $key => $value) {
 				echo "O valor de $key é:  $value <br/>";
 		}
 		?>
 	</div>
 </body>
</html>