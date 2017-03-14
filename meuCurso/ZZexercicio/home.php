<?php
	session_start();
	require 'config.php';

	$sql = "SELECT * FROM usuarios";
	$sql = $data->query($sql);

	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $user) {
			echo "<p>".$user["nome"]."</p>";
			echo "<p>".$user["email"]."</p>".'<p><a href="excluir.php?id='.$user['id'].'">excluir</a></p>';
		}
	}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<a href="login.php">Voltar</a>
</body>
</html>