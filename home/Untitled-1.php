<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style3.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>

<div class="top">
<table>
<td>
<a href="home2.php"><img src="../Image/logo.png" alt="Logo" class="logo"></a>
</td>
<td style="width:100%;"></td>
<td>
<h6 style="text-align:right;"><a href="logout.php" >logout</a></h6>
</td>
</table>
</div>

<div id="grad4"></div>
<div id="grad5"></div>
<P>
<table class="member1">
<tr>
<th class="A"><i class="glyphicon glyphicon-list-alt" style="color:red;"></i>&nbsp;QUESTION</th>
<th class="B"></th>
<th class="A">ANSWER&nbsp;<i class="glyphicon glyphicon-upload" style="color:blue;"></i></th>
</tr>

<?php
session_start();
require("connect.php");
mysqli_select_db($con,'teacher');

$stu_id=$_SESSION['stu_id'];

$q="select * from assignments_info where STU_ID = '$stu_id'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num!=0)
{
?>
<tr>
<td><?php
echo $num['STU_ID'];
echo $num['STU_NAME'];
echo $num['COURSE_NAME'];
echo $num['COURSE_ASSIGNMENT'];?></td>
<?php

}

?>
<td></td>
<td>
<form action="#">
<textarea name='comment' id='comment' placeholder="Text Your Answers..."></textarea>
<input type="submit" value="submit" />
</form></td>
</tr>
</table>
</table>
</P>
</body>
</html>