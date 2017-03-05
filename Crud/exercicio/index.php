<pre>
<?php
	require_once 'CRUD.php';
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$action = addslashes($_POST['action']);
	$banco = new Banco("controle","localhost","root","");
	if (!empty($nome)) {
		switch ($action) {
			case "delete":
				$banco->delete("controle",array("nome" => "$nome", "email" => "$email"));
				break;
			
			case "insert":
				$banco->insert("controle",array("nome" => "$nome", "email" => "$email"));
				break;
			case "result":
			echo $banco->result();
				break;
		}
	} else {
		
	}
	
	
?>
</pre>

<form method="POST">
	<select name="action">
		<option value="delete">Delete</option>
		<option value="insert">Insert</option>
		<option value="result">Resultado</option>
	</select>
	Nome : <input type="text" name="nome">
	Email : <input type="text" name="email">
	<input type="submit" value="Cadastrar">
</form>