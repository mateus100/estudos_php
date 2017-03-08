<?php
	$file = $_FILES['file'];
	if (isset($file['tmp_name']) && !empty($file['tmp_name'])) {
		move_uploaded_file($file['tmp_name'], 'arquivo/'.$file['name']);
		echo "Foi";
	}
?>