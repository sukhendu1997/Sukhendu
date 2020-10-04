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
$q="select COURSE_ASSIGNMENT from assignments_info";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num!=0)
{
?>
<table>
<tr>
<th>STU_ID</th>
<th>STU_NAME</th>
<th>COURSE_NAME</th>
<th>COURSE_ASSIGNMENT</th>
</tr>
<?php	
while($row=mysqli_fetch_assoc($result))
{
	$COURSE_ASSIGNMENT=$row['COURSE_ASSIGNMENT'];
?>
<tr>
<td><?php echo($COURSE_ASSIGNMENT) ?></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>