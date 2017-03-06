<?php 
 class core {
    
    private $controller;

    private $action;


    public function run() {
       
        $url = substr($_SERVER["PHP_SELF"], 10);
       if (!empty($url)) {
           
           $url = explode("/", $url);
           
           array_shift($url);

           $controller= $url[0]."Controller";

           if (isset($url[1])) {
           	$action = $url[1];
           } else {
           	$action = "index";
           }
            
         }  else {

         	$controller = "homeController";
         	$action = "index";
         }    
          
          require_once 'core/controller.php';
          
          $c = new $controller();

          $c->$action();
    }

 }


?>