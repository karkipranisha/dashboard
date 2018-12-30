<?php
$tmp_name=$_FILES['upload']['tmp_name'];
$size=$_FILES['upload']['size'];
$name=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$path="../uploads/";
if(move_uploaded_file($tmp_name, $path.$name))
{
	echo "file uploaded";
	echo "<img src=$path.$name>";
}
else
{
	echo"something wrong";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method ="post" name="imgupload" action="" enctype="multipart/form-data">
	<input type="file" name="upload"/>
	<input type="submit" name="submit"
	value="upload"/>
</form>
</body>
</html>