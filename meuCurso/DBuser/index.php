<?php 
	require 'usuario.php';

	$usuario = new Usuario(3);
	echo "Nome: ".$usuario->getNome();
	
?>

<form method="get">
	Nome:  <input type="text" name="nome">
	Email: <input type="text" name="email">
	Senha: <input type="password" name="senha">
	<input type="submit" value="enviar">
</form>
