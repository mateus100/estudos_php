<?php
 $nome = addslashes($_POST["nome"]);
 $ano = addslashes($_POST["idade"]);
 $idade = date("Y") - $ano;
 $sexo = addslashes($_POST["sexo"]);
 echo "<p>".$nome."</p>";

 ?>
