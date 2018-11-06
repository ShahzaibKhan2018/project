<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" action="" enctype="multipart/form-data">
<input type="file" name="file" /> <br /><br />
<input type="submit" value="submit!" name="submit" />
<form/>
</body>
<?php
if(isset($_POST['submit'])){
	$name = $_FILES ['file']['name'];
	$type = $_FILES ['file']['type'];
	$size =  $_FILES ['file']['size'];
	$temp_name =  $_FILES ['file']['tmp_name'];
	$error =  $_FILES ['file']['error'];
	
	if(isset($name) && !empty ($name)){
		if (($type == 'image/jpeg' || $type == 'image/png') && ($size = 2e+7)) {
	$location = 'upload/';
	if(move_uploaded_file($temp_name, $location.$name)){
	        echo "File Uploaded!"; 
	}
	else {
		echo "Error uploading file";
		}
		}
	else {
		echo "Image should always be type png or jpeg";
		}
	}
}
?>
</html>