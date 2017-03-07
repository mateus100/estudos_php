<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="exercicio02.php">
    <?php
       $a = 1;
       while ( $a <= 5) {
          echo " valor $a :  <input type='number' name='$a' value='0' min='0' max='100' />"."<br>";
          $a++;
       }
    ?>
    <input type="submit" class="botao" value="Enviar">
  </form>
</div>
</body>
</html>
 