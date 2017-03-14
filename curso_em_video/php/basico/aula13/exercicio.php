<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
   <style>
  h1 { font: 20pt Arial; }
  h2 { font: 18pt Arial; }
  </style>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["num"]?$_GET["num"]:1;
        $mult = 0;
        echo "Os valores multiplos são: ";
        for ($c = 1; $c <= $n ; $c++) {
           if ($n%$c == 0) {
              $mult ++;
              echo "$c ";
           }
           
        }
        echo "<br />O total de multiplos são: $mult";
        if ($mult <= 2) {
          echo "É Primo <br/>";
        } else {
          echo "<br />Não é Primo";
        
}     ?>
</div>
</body>
</html>
 