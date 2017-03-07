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
 include "func.php";
 	$a = isset($_GET['a'])?$_GET['a']:0;
 	$b = isset($_GET['b'])?$_GET['b']:0;
 	echo soma($a,$b);
 ?>

</div>
</body>
</html>
 