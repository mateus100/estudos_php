<?php
ob_start();
require 'pagina.php';

$html = ob_get_contents();
ob_end_clean();

echo $html;
?>
