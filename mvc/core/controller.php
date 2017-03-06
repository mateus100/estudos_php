<?php 
 
   class controller {
       

       public function load($name , $data = array()) {
             extract($data);
       	     include "view/".$name.".php";
       }
 }


?>