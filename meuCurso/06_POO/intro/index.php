<?php
	class user{
	var $nome;
	$nome = $_POST["nome"];
}
?>

<html>
<head>
	<title></title>
</head>
<body>
<form methold="post">
<input type="text" name="nome" placeholder="Seu nome">
<input type="submit" value="Enviar">
</form>
</body>
</html>