<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
	<title></title>
</head>
<body class="body">
	<div class="div">
		<?php
		$nome = isset($_GET['nome'])?$_GET['nome']:0;
		print("Seu nome invertido é ".strrev(strtolower($nome)));
		?>
		<br><br>
		<a href="index.html"><input type="submit" value="voltar"></a>	
	</div>
</body>
</html>