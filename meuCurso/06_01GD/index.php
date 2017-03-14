<?php
	$file = "montain.jpg";
	$width = 200;
	$height = 200;
	list($largura, $altura) = getimagesize($file);
	$ratio = $largura / $altura;

	if ($width / $height > $ratio ) {
		$width = $height * $ratio;
	} else {
		$width = $height / $ratio;
	}	
	$image_final = imagecreatetruecolor($width, $height);
	$image_complete = imagecreatefromjpeg($file);
	imagecopyresampled($image_final, $image_complete, 0,0,0,0, $largura, $altura,
		$width, $height);
	imagejpeg($image_final, null, 90);
	header("Content-Type: image/jpeg");
?>