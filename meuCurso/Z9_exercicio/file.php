<?php
	$file = $_FILES['file'];
	if (isset($file['tmp_name']) && !empty($file['tmp_name'])) {

		$nomedoarquivo = md5(time().rand(0,99)).'.png';
		move_uploaded_file($file['tmp_name'], 'arquivo/'.$nomedoarquivo);
		echo "foi";
	}
?>