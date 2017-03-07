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
 	$ex = isset($_GET['num'])?$_GET['num']:0;
 	$val = 1; 
 	 do {
 	 	$result = $ex*$val;
 	 	$val++;
 	 	echo "$ex x ".($val-1) .
 	 	"= "."$result "."<br/>";
 	 }while($val <= 10);      
    ?>
</div>
</body>
</html>
 