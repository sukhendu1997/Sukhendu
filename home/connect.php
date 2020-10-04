<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'teacher';  
$con = mysqli_connect($host, $user, $pass,$dbname);
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}
else
{
	echo '';
}
?>
<body>
</body>
</html>