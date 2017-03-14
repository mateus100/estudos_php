<?php
	if (isset($_FILES['file'])) {
		if (count($_FILES['file']['tmp_name']) > 0 ) {
			for ($q=0;$q<count($_FILES['file']['tmp_name']);$q++) {
				$name = md5($_FILES['file']['name'][$q].time().rand(0,99)).'.png';
				move_uploaded_file($_FILES['file']['tmp_name'][$q], 'arquivo/'.$name);
			}
		}
	}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file[]" multiple><br><br>
	
	<input type="submit" value="enviar"><br>
</form>