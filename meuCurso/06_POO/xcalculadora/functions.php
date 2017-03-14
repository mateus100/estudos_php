<?php
class Calculadora {
	private $n;

	function __construct($num) {
		$this->n = $num;
	}

	function Somar($n1) {
		$this->n += $n1;
		return $this;
	}

	function Sub($n1) {
		$this->n -= $n1;
		return $this;
	}

	function Div($n1) {
		$this->n /= $n1;
		return $this;
	}

	function Mult($n1) {
		$this->n *= $n1;
		return $this;
	}

	function resultado() {
		return $this->n;
	}
}

?>