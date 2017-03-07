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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 1:
            echo "Descanse hoje Pequeno Gafanhoto";       
            break;
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            echo "Levanta cedo que hoje tem aula";
            break;
            case 7:
            echo "Hoje é dia de lavar a égua";
            default:
            echo "Deve ser 31 de Fevereiro";
        }
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 