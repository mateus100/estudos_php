<?php 
 spl_autoload_register(function($class) {
 	if (strpos($class,"Controller") > - 1) {
        if (file_exists("controller/".$class.".php")) {
        	require "controller/".$class.".php";
        } 
 	} elseif (file_exists("model/".$class.".php")) {
            require "model/".$class.".php";
 	} else {

 		    require "core/".$class.".php";
 	}
 });

 $c = new core();

 $c->run();

?>
