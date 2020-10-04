<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php") ;
$q="select * from doubt order by question_ask ASC";
$result = mysqli_query($con,$q);
$c=mysqli_num_rows($result);
if($c> 0)
{  
?>
<h1 align="center">Doubt Discassion</h1>
<form method="post" action="doubt_update.php">
<table border="0" cellpadding="5" align="center" width="50%">
<tr>
<th>Student Id</th>
<th>Chatbox</th>
<th>Teacher Answer</th>
</tr>
<?php
 while($row = mysqli_fetch_assoc($result))
 {
	$student_id=$row['stu_id'];
	$question_ask=$row['question_ask'];
	$teacher_answer=$row['teacher_answer'];

?>
<tr>
<td><input type="text" name="stuid" id="stuid" value="<?php echo $student_id ?>" /></td>
<td><input type="text" name="chatbox" id="chatbox" value="<?php echo $question_ask ?>" /></td>
<td><input type="text" name="teacher_answer" id="teacher_answer" value="<?php echo $teacher_answer ?>" /></td>
</tr>
<?php
 }
?>
<tr>
<th colspan="20"><input type="submit" name="submit" id="submit" value="Send"></th>
<td></td>
</tr>
</table>
</form>
<?php
}
else
{
	echo "<h2>No records found</h2>";
}
mysqli_close($con);
?>
<body>
</body>
</html>