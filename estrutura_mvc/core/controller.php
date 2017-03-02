<?php 
	
	class controller {

		public function views( $view, $viewData = array() ) {

			extract($viewData);

		 	include 'views/'.$view.'.php';

		}


		public function template( $view, $viewData = array() ) {

			include 'views/template.php';

		}

		public function viewAndTemplate($view, $viewData = array()) {

			extract($viewData);

			include 'views/'.$view.'.php';

		}

	}
	

?>