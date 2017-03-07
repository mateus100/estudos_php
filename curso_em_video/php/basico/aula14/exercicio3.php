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
   function soma() {
   	$p = func_get_args();
   	$t = func_num_args();
   	$s = 0;
   	for ($i=1; $i <$t ; $i++) { 
   		$s += $p[$i];
   	}
   	    return $s;
   }
    $r = soma(10,20,30);
    echo "$r";
   ?>
</div>
</body>
</html>
 