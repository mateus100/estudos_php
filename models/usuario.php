<?php

	class usuario extends model {

		public function __construct()
       {

       	parent::__construct();

       }
		public function getPessoas() {

			$array  = array();

			$sql = "SELECT * FROM usuarios";

			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}

			return $array;

		}

	}