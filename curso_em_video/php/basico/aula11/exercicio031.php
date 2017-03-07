<html>
<head> 
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
<div>
	<?php
$m = isset($_GET['max'])? $_GET['max']:0;
$n = isset($_GET['max'])? $_GET['mim']:0;
$in = isset($_GET['select'])? $_GET['select']:0;
	while ($m <= $n) {
	    echo "$m ";
		$m += $in;
}

?>
</div>
</body>
</html>
