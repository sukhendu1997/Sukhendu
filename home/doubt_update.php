<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="teacher";
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
   die("Connection Failed");
}
if(isset($_REQUEST['submit']))
{
	$stuid=$_REQUEST['stuid'];
    $question=$_REQUEST['chatbox'];
	$answer=$_REQUEST['teacher_answer'];
	$sql="update doubt set teacher_answer='$answer' where stu_id='$stuid' and question_ask='$question'";
	if(mysqli_query($conn,$sql))
	{
		echo "New Record inserted";
	}
	else
	{
		echo "Unable to insert data";
	}
}
?>
<body>
</body>
</html>