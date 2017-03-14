<html>
<head>
	<title>UEC</title>
</head>
<body>
<?php
require_once 'Lutador.php';
require_once 'Luta.php';
$l1 = new Lutador("Eu",31,74,71,70,20,7,1);
$l2 = new Lutador("Ele",31,74,1.80,1,0,1);
$combate = new Luta();
$combate->marcarLuta($l1,$l2);
$combate->lutar();
$l1->status();
$l2->status();
?>
</body>
</html>