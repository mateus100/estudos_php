<?php
	require 'config.php';
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuarios SET nome = '$nome', senha = '$senha', email = '$email'"; 
		$pdo->query($sql);

		header("Location: index.php");
	}

?>



<style>
	div {
		width: 200px;
		height: 200px;
		margin-top: 100px; 
		margin: auto;
	}

</style>
<div></div>
<div>
<form method="post">
	Nome: <br/><br/>
	<input type="text" name="nome">
	E-mail: <br/><br/>
	<input type="text" name="email">
	Senha: <br/><br/>
	<input type="password" name="senha">
	<input type="submit" value="Cadastra">
</form>
</div>