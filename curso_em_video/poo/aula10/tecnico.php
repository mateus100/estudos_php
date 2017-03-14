<?php
 class tecnico extends aluno {
 	private $registroProfissional;

 	public function praticar() {
 		
 	}

 	 function getRegistroProfissional() {
 		return $this->registroProfissional;
 	}

 	function setRegistroProfissional($registroProfissional) {
 		$this->registroProfissional = $registroProfissional;
 	}
 }

?>
