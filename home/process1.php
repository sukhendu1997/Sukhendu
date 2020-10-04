<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require("connect.php");
mysqli_select_db($con,'teacher');
$stu_id=$_POST['stu_id'];
$stu_password=$_POST['stu_password'];



$q="select * from stu_info where stu_id='$stu_id' && stu_password='$stu_password'";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result))
{
	$stu_name=$row['stu_name'];
	$course_name=$row['course_name'];
}
if($num==1)
{
	session_start();
	$_SESSION['stu_id']=$stu_id;
	$_SESSION['stu_name']=$stu_name;
	$_SESSION['course_name']=$course_name;
	header('location:home2.php');
}
else
{
	header('location:login.php');
}

?>
</body>
</html>