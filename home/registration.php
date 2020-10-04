<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style7.css"/>
</head>

<body>
<h1>Registration Form</h1>
	<div class="registration">
    <img src="../Image/avatar.png" class="avatar">
	<form  method="post" action="registration2.php">
    
    		<label>UserId :</label>
			<input type="text"  name="stu_id" placeholder="Enter Your Id">
            <br />
			<label>Name :</label>
			<input type="text"  name="stu_name" placeholder="Enter your first name">
            <br />
			<label>Email :</label>
			<input type="email"  name="stu_email" placeholder="Enter your email">
			<br />
			<label>Password :</label>
			<input type="password"  name="stu_password" placeholder="Enter your password">
			<br />
        	<label>Mobile :</label>
			<input type="number"  name="stu_phone" placeholder="Enter your number"/>
			<br />
            <label>Course Name :</label>
			<select name="course_name" id="course" >
            <option  value="0">Select</option>
            <option value="CORE JAVA">CORE JAVA</option>
            <option value="WEB DEVELOPEMENT">WEB DEVELOPEMENT</option>
            <option value="APP DEVELOPEMENT">APP DEVELOPEMENT</option>
 			</select>
           	<br /><br />
            <label>Start date</label>
            <input type="date" placeholder="dd-mm-yyyy" name="start_at">
            <br />
			<label>End date</lab>
             <input type="date" placeholder="dd-mm-yyyy" name="end_at">
             
            
             
            <input type="submit" value="Register" >
	</form>
    </div>
	
</body>
</html>