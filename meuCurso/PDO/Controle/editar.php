<?php
	require 'config.php';
	$id = 0;

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = addslashes($_GET['id']);

		$sql = "SELECT * FROM usuarios 	where id = '$id'";
		$sql = $pdo->query($sql);
		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();
		} else {
			header("Location:index.php");	
		}
	} else {
		header("Location:index.php");
	}

	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' where id='$id' ";
		$pdo->query($sql);

		header("Location:index.php");
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
	<input type="text" name="nome" value="<?php echo $dado['nome']?>">
	E-mail: <br/><br/>
	<input type="text" name="email" value="<?php echo $dado['email']?>"><br/><br/>
	<input type="submit" value="Atualizar">
</form>
</div>