<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
	function soma($x) {
		$x+=2;
		echo "O valor de $x é $x";
	}
	$a = 3;
	soma($a);
	echo "<br /> O valor de $a é $a";
    ?>
</div>
</body>
</html>
 