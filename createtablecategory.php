<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS category(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
status TINYINT(1) NOT NULL,
UNIQUE (name)
)";
$qry=mysqli_query($conn,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table Created Successfully";
}
else
{
	echo "Error Creating table or might exist";
}
?>