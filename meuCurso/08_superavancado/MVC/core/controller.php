<?php

	class controller {

		function loadView($view, $dataV = array()) {

			extract($dataV);

			include 'views/'.$view.'.php';

		}

	}