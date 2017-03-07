<?php
	$n = "Negativo";
	$p = "Positivo";
  for ($i = -10; $i <= 10; $i++) {
  	if ($i%2 == 0) {
  			echo "<br/>$i Par: ";
  		} else {
  			echo "</br> $i Impar : ";
  		 }
  	if ($i < 0  ) {
  		   echo " $n";
  	    } elseif($i > 0) {
  		   echo " $p";
   }
}
	
?>
