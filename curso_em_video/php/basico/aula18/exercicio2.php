<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<ul>
		<?php
			$c = range(5,10,2);
			foreach ($c as $valor) {
				echo "<li>$valor</li>";
			}
		?>
		</ul>
	</div>
</body>
</html>