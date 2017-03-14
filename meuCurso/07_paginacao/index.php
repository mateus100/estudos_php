<?php 

/*
* User On;
*
* @package Rede Socical 
*
* @autor Mateus R. Moreira <mateusrodriguesmoreira20@gmail.com>
* @parem 1° Query conta o numero de usuários do sistema
* @param 2° Query dá o limite de usuários da página
*/
	$dns = "mysql:dbname=controle;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dns,$dbuser,$dbpass);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
	$total = 0;
	$eachpage = 3;
	
	$sql = "SELECT COUNT(*) as n FROM usuarios";
	$sql = $pdo->query($sql);
	$sql = $sql->fetch();
	$total = $sql['n'];


	$paginas = $total/$eachpage;
	$pg = 1;

	if (isset($_GET['p']) && !empty($_GET['p'])) {
			$pg = addslashes($_GET['p']);	
	}


	$sql = "SELECT * FROM usuarios LIMIT $pg, $eachpage";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $key) {
			echo "<p>".$key["nome"]." - ".$key["email"]."</p>";
		}
	}
	echo "<hr/>";
	echo "Aqui há ".$paginas." Usuários logados";

	for ($q=1; $q < $paginas ; $q++) { 
		echo '<a href="./?p='.($q).'">['.($q+1).']</a>';
	}
?>