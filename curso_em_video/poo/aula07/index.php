

<html>
<head>
	<title></title>
</head>
<body>
<pre style="font-size:18px;">
<?php
	spl_autoload_register(function($class){
    require_once ($class.'.php');
 });

	$a[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,3,1);
	$a[1] = new Lutador("Puts Script","Brasil",29,1.68,57.8,14,2,3);
	$a[2] = new Lutador("SnapShadow","EUA",35,1.64,80.9,12,2,3);
	$a[3] = new Lutador("DeadCode","Australia",28,1.93,81.6,13,0,2);
	$a[4] = new Lutador("Ufocobol","Brasil",37,1.70,109.3,12,2,3);
	$a[5] = new Lutador("Nerdaart","EUA",30,1.81,105,13,0,2);
	$UEC01 = new Luta;	
	$UEC01->marcarLuta($a[2],$a[3]);
	$UEC01->lutar();
	$a[2]->status();
	$a[3]->status();
	?>
</pre>
</body>
</html>