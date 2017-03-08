<?php

class User {
	private $nome;
	private $email;
	private $senha;
	private $id;
	private $pdo;
	public function __construct($i)	{
		try {
			$this->pdo = new PDO("mysql:dbname=usuarios;host=localhost","root"," ");
		} catch(PDOException $e) {
			echo "<p>Falha</p>".$e->getMessage();
		}

		if (!empty($i)) {
			$sql = "SELECT * FROM usuarios WHERE id = ?";

			$sql->pdo->prepare($sql);

			$sql->execute(array($i));

			if ($i->rowCount() > 0) {
				$data = $sql->fetch();

				$this->email = $data['email'];
				$this->senha = $data['senha'];
				$this->nome = $data['nome'];
			}
		}

	}

	public function setId($i) {
		$this->id = $i;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getEmail() {
		return $this->nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setSenha($senha) {
		return $this->senha;
	}

	public function salvar() {
		if (!empty($this->id)) {
			$sql = "UPDATE usuarios SET email = ?, senha = ?, nome = ? WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($this->email, $this->senha, $this->nome, $this->id));
		} else {
			$sql = "INSERT INTO usuarios SET email = ?, senha = ?, nome = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($this->email, $this->senha, $this->nome));
		}
	}
}
?>