<?php
	session_start();
	require 'config.php';

	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha='$senha'";
		$data->query($sql);
		header("location: index.php");

	} else {
		echo "Preencha todos os campos";
	}

?>

<html>
<head>
	<title>Cadastro</title>
	<style type="text/css">
		body {
			text-align: center;
		}
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
		Nome: <input type="text" name="nome"><br/><br/>
		Email: <input type="text" name="email"><br/><br/>
		Senha: <input type="password" name="senha"><br/><br/>
		<input type="submit" value="Entrar">
	</form>
    </div>	
</body>
</html>