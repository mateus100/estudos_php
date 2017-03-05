<?php 

	function is_new($cache) {
		$last = filectime($cache);
		$c = time() - $last;

		if ($c > 10) {
			return false;
		} else {
			return true;
		}
	}
 $c = 'page';
 
 if (isset($_GET['c']) && !empty($_GET['c'])  &&
 	file_exists('assets/'.$_GET['c'].'.php')) {
 	$c = $_GET['c'];
 }

 if (file_exists("caches/".$c.".cache") && is_new("caches/".$c.".cache")) {
 	require "caches/".$c.".cache";
 } else {
  
    ob_start();
    require "assets/".$c.'.php';
    $html = ob_get_contents();

    ob_end_clean();

    file_put_contents("caches/".$c.".cache", $html);
    echo $html;
 }
  
	
?>