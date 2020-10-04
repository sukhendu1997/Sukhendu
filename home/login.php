<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
 <link rel="stylesheet" type="text/css" href="style5.css">
</head>

<body>
<div class="loginbox">
    <img src="../Image/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="process1.php">
            <p>Username</p>
            <input type="text" name="stu_id" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="stu_password" placeholder="Enter Password">
            <input type="submit" value="Login">
           <a href="registration.php">Don't have an account?Register Here </a>
        </form>
        
    </div>
</body>
</html>