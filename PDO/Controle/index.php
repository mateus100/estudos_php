<?php
	require 'config.php';

?>

	<a href="add.php">Cadastrar</a><br><br>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
	<?php
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $user) {
			echo "<tr>";
			echo "<td>".$user['nome']."</td>";
			echo "<td>".$user['email']."</td>";
			echo '<td><a href="editar.php?id='.$user['id'].'">Editar</a> - <a href="excluir.php?id='.$user['id'].'">excluir</a></td>';
			echo "<tr>";
		}
	} else {
		
	}
	?>
</table>