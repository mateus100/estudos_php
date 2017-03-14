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
       $a = isset($_GET['val'])?$_GET['val']:1;
	   $c = $a;
	   $f = 1;
		do {
			$f= $f * $c;
			$c--;
		}   while ($c >= 1);  
		echo '<h1>Calculando o fatorial de $v! :</h1>	'.$f;
    ?>
    <p><a href="fatorial.html" class="botao">Voltar</a></p>
</div>
</body>
</html>