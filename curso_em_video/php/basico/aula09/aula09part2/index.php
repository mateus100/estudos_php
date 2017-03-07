<?php
$a = $_GET["notaum"];

$b = $_GET["nota"];

 $m = ($a + $b)/2;

 echo number_format($m, 2);

if ($m >= 7) {
 echo "  aprovado";
} elseif ($m < 7 && $m >= 3) {
	echo "  recuperação";
}
else {
	echo "   Reprovado";
}
?>