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
	$c = 1;
	while ($c <= 10) {
		echo $c."<br>";
		$c++;
		//$c += 1;
		//$c = $c + 1;

	}

?>

</div>
	<div>
		<?php
			$d = 10;
	while($d >= 1) {
		echo $d."<br>";
		$d--;
	}

		?>
	</div>

</body>
</html>
 