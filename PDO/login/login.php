<?php
require 'config.php';
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	$sql = "SELECT * FROM usuario WHERE email='$email' , senha='$senha' ";
	$sql = $pdo->query($sql);
	header("Location:index.php");
} else {
	echo "Falhou";
}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<style>
		body {
			background: #eee;
		}
		.form {
			width: 400px;
			height: 200px;
			margin: auto;
			clear:both;
			margin-top: 180px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
	<form method="POST" class="form">
		Email: <br><input type="email" name="email"><br></br>

		Senha: <br><input type="password" name="senha"><br/><br/>
		<input type="submit" value="Entrar">
	</form>
	</div>
</body>
</html>