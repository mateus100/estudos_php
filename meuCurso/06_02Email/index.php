<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<?php
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$mensagem = addslashes($_POST['msg']);
		$enviar = "sliceofcherrypie@gmail.com";
		$assunto = "Pergunta do contato";
		$body = " Nome: ".$nome." Email: ".$email." Mensagem: ".$mensagem;
		$info = "From: sliceofcherrypie@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."x-Mailer: PHP/".phpversion();
		mail($enviar, $mensagem, $assunto, $info);
		echo "<h2>Email enviado com sucesso</h2>";
		exit();
	}
	?>
	<form method="post">
		Nome: <input type="text" name="nome" placeholder="Digite seu nome"><br><br>
		Email: <input type"text" name="email" placeholder="Email"><br><br>
		Mensage:<br>
		<textarea placeholder="Mensagem" name="msg"></textarea><br><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>