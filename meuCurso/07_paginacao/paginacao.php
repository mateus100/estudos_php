<?php 

	$dbname= "mysql:dbname=controle;host=localhost";
	$dbuser= "root";
	$dbpass = "";
	try {
		$pdo = new pdo($dbname,$dbuser,$dbpass);
	} catch (PDOException $e) {
		echo "<p>Erro</p>".$e->getMessage();
	}

	$total = 0;

	$tot_page = 3;

	$sql = "SELECT COUNT(*) as c FROM usuarios";

	$sql = $pdo->query($sql);

	$sql = $sql->fetch();

	$total = $sql['c'];

	$paginas = $total/$tot_page;

	$p = 0;
	$sql = "SELECT * FROM usuarios LIMIT $p, $tot_page";//1 pegando registros parte B colocar o limit
	$sql = $pdo->query($sql); //2


	if ($sql->rowCount() > 0) {//pegando registros
		foreach ($sql->fetchAll() as $key) {
					echo "<p>".$key['nome']." - ".$key['email']."</p>";// 3 executando
		}		
	}


	echo "<hr/>";
	echo "Total de paginas vai receber ".$paginas." Paginas";


	for($q=0;$q<$paginas;$q++) {
		echo '<spam><a href="./?p='.($q).'">['.($q + 1).']</a></spam>';
	}


	