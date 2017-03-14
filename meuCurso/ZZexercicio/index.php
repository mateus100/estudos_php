<?php
	session_start();
	require 'config.php';

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));


		$sql = "SELECT * FROM usuarios WHERE email = 'email', senha = '$senha'";

		$sql = $data->query($sql);

		header("Location: home.php");
	} else {
		//header("Location:erro.html");
	}

?>









<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.mid {
			height: 200px;
			width: 200px;
			margin: auto;
		}

		label {
			width: 50px;
			height: 100px;
			line-height: 50px;
		} 

		a{	
			color:  #00FFF7;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="mid">
	<form method="post">
		Email: <input type="text" name="email"><br/><br/>
		Senha: <input type="password" name="senha"><br/><br/>
		<input type="submit" value="Entrar">
	</form>
	<label><a href="cadastro.php">cadastro</a><label>
	</div>
</body>
</html>