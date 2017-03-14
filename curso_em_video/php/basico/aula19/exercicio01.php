<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Funções com array</title>
</head>
<body>
	<div>
		<pre>
		<?php
		$s = array(3,45,6,12,5,8,1);
		print_r($s);
		array_push($s,100);
		print_r($s);
		array_pop($s);
		print_r($s);
			foreach ($s as $valor) {
				$tot = count($valor);
				var_dump($valor)."<br/>";
				echo $tot;
			}
		?>
	</pre>

	</div>
</body>
</html>