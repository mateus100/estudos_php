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
		array_unshift($s,12);
		print_r($s);
		array_shift($s);
		sort($s);
		print_r($s);
		rsort($s);
		print_r($s);
		asort($s);
		print_r($s);
		ksort($s);
		print_r($s);
		?>
	</pre>

	</div>
</body>
</html>