<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require("connect.php");
$stu_id = $_POST['stu_id'];
$stu_name = $_POST['stu_name'];
$stu_email = $_POST['stu_email'];
$stu_password = $_POST['stu_password'];
$stu_phone = $_POST['stu_phone'];
$course_name = $_POST['course_name'];
$start_at = $_POST['start_at'];
$end_at = $_POST['end_at'];

$q="insert into stu_info(stu_id,stu_name,stu_email,stu_password,stu_phone,course_name,start_at,end_at) values 

('$stu_id','$stu_name','$stu_email','$stu_password','$stu_phone','$course_name','$start_at','$end_at')";

$r = mysqli_query($con,$q);
#echo $r;
if($r){
	header('location:login.php');
}
else
{
	
	echo "<h4>Registration Failed !!</h4>";
}
?>
</body>
</html>