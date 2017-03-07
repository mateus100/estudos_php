<html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
 	<title>Matrizes</title>
 </head>
 <body>
 	<div>
 		<pre>
 		<p>Matrizes</p>
 		<?php
 		$m = array( array(6,4),
					array(7,8),
					array(9,0),
					array(8,10));
					$m[0][1] =$m[3][1]; 
 		print_r($m);
 		?>
 	</pre>
 	</div>
 </body>
</html>