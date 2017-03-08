<?php

	require_once 'functions.php';

	$c = new Calculadora(12);
	$c->Somar(2)->Div(2)->Mult(3)->Sub(10);
	$result = $c->resultado();
	echo "O resultado é"."<p>".$result."</p>";

?>