<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       for ($i = 1;$i <=10; $i++) {
       		echo "$i ";
       		
       }
       echo "<br >";
       	for ($i  = 10; $i >= 0; $i--) {
       		echo "$i ";
       	}
        echo "<br />";
        for ($i = 0; $i <= 100; $i+=5) {
        	echo "$i ";
        }
        echo "<br/>";
        for ($i = 30; $i >=0; $i -=2) {
        	echo "$i ";
        }
    ?>
</div>
</body>
</html>