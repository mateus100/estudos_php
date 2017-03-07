<?php 
$r = array("Ras","mus"," ","Ler","do", "rf" );
array_pop($r);
foreach ($r as $key) {
	ucfirst($key);
	echo "$key";
}
?>