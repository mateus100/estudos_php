<?php
$a = isset($_GET["ano"])?$_GET["ano"]:"Digite seu ano de nascimento";
$i = date("Y") - $a;

echo "$i";

if ($i < 16) {
	$voto = "Não pode votar";
}
elseif (($i >= 16 && $i < 18) || ($i > 64)) {
		$voto  = "Opcional ";
	} else {
		$voto = "obrigatório";
}

echo "<br/>".$voto;

?>