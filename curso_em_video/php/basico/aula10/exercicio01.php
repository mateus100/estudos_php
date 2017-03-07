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
    $n = isset($_GET["num"])? $_GET["num"]:0;
    $o = isset($GET["oper"])? $_GET["oper"]:1;
    switch ($o) {
      case 1:
          $r = $n*2;
      break;
      case 2:
          $r = ($n^3);
      break;
      case 3:
          $r = sqrt($n);
        break;
        case 4:
        $r = $n + $n;
        break;
    }
    echo "O resultado da conta é <span class='foco'>$r<span>";
    ?>
    <a href="exercicio01.html" class="botao">Voltar</a>
</div>
</body>
</html>
 