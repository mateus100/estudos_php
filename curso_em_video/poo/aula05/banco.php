<?php
	class banco {
		public $numConta; 
		protected $tipo; 
		private $dono; 
		private $saldo; 
		private $status;

	public function __construct($t) {
		    $this->setTipo($t);
			$this->setStatus(false);
			$this->setSaldo(0);
			if ($this->getTipo() == "CC") {
			$this->setSaldo($this->getSaldo() + 50);
		} elseif ($this->getTipo() == "CP") {
			$this->setSaldo($this->getSaldo() + 150);
		}
	}

	public function abrirConta($t) {
		$this->setTipo($t);
		$this->setStatus(true);
	}

	public function fecharConta() {
		if ($this->getSaldo() == 0) {
			$this->setStatus(false);
			$this->setTipo(null);
			$this->setDono(null);
			$this->setNumConta(0);
		}elseif ($this->getSaldo() < 0) {
			echo "Sua Conta do Américos está em Débito";
		}else {
			echo "Seu saldo precisa estar igual a 0(Zero)"."<br/>";
		}
	}

	public function pagarMensal() {
		if ($this->getStatus() == true && $this->getTipo() == "CC") {
			$this->setSaldo($this->getSaldo() -15 );
		}elseif($this->getStatus() == true && $this->getTipo() == "CP") {
			$this->setSaldo($this->getSaldo() - 20);
	    }
		elseif ($this->getStatus == false) {
			echo "Você não tem conta aberta no Americos<br/>";
		}
	}

	public function depositar($deposito) {
		if ($this->getStatus() == true) {	
		$this->setSaldo($this->getSaldo() + $deposito);
	  } elseif ($this->getStatus() == false) {
	  		echo "Você não tem conta aberta no Americos<br/>";
	  }
	}

	public function sacar($saque) {
		if ($this->getStatus()){
			if ($this->getSaldo() > $saque) {
			$this->setSaldo($this->getSaldo() - $saque);
	     	}else {
			echo "Saldo insuficiente";
		 } 
	  }
	}

	public function getNumConta() {
		return $this->conta;
	 }

	public function setNumConta($c) {
		$this->conta = $c;
	}

	public function getDono() {
		return $this->dono;
	 }

	public function setDono($d) {
		$this->dono = $d;
	 }

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($t) {
		$this->tipo = $t;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function setSaldo($s) {
		$this->saldo = $s;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($st) {
		$this->status = $st;
	}
}

?>