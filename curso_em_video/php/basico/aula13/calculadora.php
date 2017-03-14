<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="calculadora2.php">
		<select name="num">
			<?php
			for($c = 1; $c <= 10; $c++) {
				echo "<option>$c</option>";
			}
			?>
        </select>
        <input type="submit" class="botao" value="Tabuada">
	</form>
</div>
</body>
</html>
 