<?php 
 class core {

    public function run() {
       
       $url = explode("index.php", $_SERVER["PHP_SELF"]);

       $url = end($url);

       if (!empty($url)) {
           
           $url = explode("/", $url);
           
           array_shift($url);

           $controller= $url[0]."Controller";
           
           array_shift($url);

           if (isset($url[0])) {
           	
            $action = $url[0];

            array_shift($url);

           } else {
           	
            $action = "index";
           
           }
          
           if(count($url) > 0) {
           $param = $url;
          }

         }  else {

         	$controller = "homeController";
         	$action = "index";

          $param = array();
         }    
         require_once 'core/controller.php';
          
          $c = new $controller();

          call_user_func_array(array($c, $action), $param);
    }

 }


?>