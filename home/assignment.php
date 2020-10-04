<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style2.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
<?php
session_start();
require("connect.php");
mysqli_select_db($con,'teacher');

$stu_id=$_SESSION['stu_id'];
$_SESSION['stu_id']=$stu_id;


$stu_id=$_SESSION['stu_id'];

?>

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

<p>
<table class="member">
<tr>
<th class="A"><i class="fas fa-book" style="color:red;"></i>&nbsp;ASSIGNMENT</th>
<th class="B"></th>
<th class="A">DOUBTS&nbsp;<i class="fa fa-question-circle" style="color:blue;"></i></th>
</tr>
<tr>
<td class="a"><a href="assignment1.php" style="text-decoration:none;"><h7>Click here to enter...</h7></a></td>
<td></td>
<td class="a"><a href="doubt.php" style="text-decoration:none;"><h7>Click here to enter...</h7></a></td>
</tr>
</table>
</p>
<br />
<br />

<div class="box">
<h2 class="member1">Help Desk</h2>
<ul class="member1">
<li>Please read all instruction carefully.</li>
<li>At first read the questions, then submit your answer.</li>
<li>Fill al the answer space.</li>
<li>Maximum 500 letters you can use.</li>
</ul>
</div>

</body>
</html>