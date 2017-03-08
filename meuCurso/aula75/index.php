<?php
	setcookie("meuteste", "Fulano de tal", time()+3600);
	echo "Cookie setado com sucesso!".$_COOKIE["meuteste"];

?>