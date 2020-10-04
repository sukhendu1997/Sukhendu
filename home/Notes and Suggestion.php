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
<?php
session_start();
require("connect.php");
mysqli_select_db($con,'teacher');
$stu_id=$_SESSION['stu_id'];

$q="select notes from notes where stu_id ='$stu_id'";
$r="select suggestion from suggestion where stu_id ='$stu_id'";

$result=mysqli_query($con,$q);
$result1=mysqli_query($con,$r);

$num=mysqli_num_rows($result);
$num1=mysqli_num_rows($result1);

if($num!=0)
{
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
<P>
<table class="member1" >
<tr>
<th class="A"><i class="glyphicon glyphicon-list-alt" style="color:red;"></i>&nbsp;NOTES</th>

<th class="A">SUGGESTIONS&nbsp;<i class="glyphicon glyphicon-list-alt" style="color:blue;"></i></th>
</tr>

<?php	
while($row=mysqli_fetch_assoc($result))
{
	$notes=$row['notes'];
}?>
<?php	
while($row=mysqli_fetch_assoc($result1))
{
$suggestion=$row['suggestion'];
}?>
<?php if($num1!=0)
{
?>
<tr>
<td>
<ul>
<li><?php echo($notes) ?></li>
</ul>
</td>




<td>
<ul>
<li>
<?php echo($suggestion) ?>
</li>
</ul>
</td>
<?php
}
}
?>

</tr>
</table>
</P>
</body>
</html>