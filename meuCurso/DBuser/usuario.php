<?php 
	class Usuario {
		private $nome;
		private $senha;
		private $email;
		private $id;

		private $pdo;
	public function __construct($i) {
	
		try {
				$this->pdo = new PDO("mysql:dbname=usuarios;host=localhost","root","");
			} catch (PDOException $e) {
				echo "<p>Falhou</p>".$e->getMessage();
			}

		if (!empty($i)) {
			$sql = "SELECT * FROM usuarios WHERE id = ?";

			$sql = $this->pdo->prepare($sql);

			$sql->execute(array($i));

				if ($sql->rowCount() > 0) {
				$data = $sql->fetch();

				$this->email = $data['email'];
				$this->senha = $data['senha'];
				$this->nome = $data['nome'];
			}
		}
	}

	public function getId() {
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setSenha($senha){
		$this->senha = md5($senha);
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function salvar(){
		if (!empty($this->id)) {
			$sql = "UPDATE 	usuarios SET email = ?, senha = ?, nome = ? WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($this->email,$this->senha,$this->nome,$this->id));
		} else {
			$sql = "INSERT INTO usuarios SET email = ?, senha = ?, nome = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($this->email,$this->senha,$this->nome));
		}
	}
}	
?>