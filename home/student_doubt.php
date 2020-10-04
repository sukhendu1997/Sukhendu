<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
require("connect.php");
mysqli_select_db($con,'teacher');

$stu_id=$_SESSION['stu_id'];
$stu_name=$_SESSION['stu_name'];
$course_name=$_SESSION['course_name'];

$comment = $_POST['comment'];

$q="insert into doubt(STU_ID,COURSE_NAME,QUESTION_ASK,TEACHER_ANSWER) values ('$stu_id','$course_name','$comment','0')";
$r = mysqli_query($con,$q);
#echo $r;
if($r){
	header('location:assignment.php');
}
else
{
	
	header('location:doubt.php');
	
}
?>
</body>
</html>