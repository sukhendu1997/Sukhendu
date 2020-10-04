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
    $stid=$_REQUEST['stid'];
    $cname=$_REQUEST['cnm'];
    $tarea=$_REQUEST['textarea'];
    $sql="insert into notes(stu_id,course_name,notes)values('$stid','$cname','$tarea')";
	if(mysqli_query($conn,$sql))
	{
		echo "Record inserted successfully";
	}
	else
	{
		echo "Unable to insert data";
	}
}	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Notes</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #ffa36c;
      }
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid #dd2c00;
      background: #ffa36c; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #dd2c00;
      } 
      @media (min-width: 568px) {
      form {
      width: 60%;
      }
      }

      .form-inner select{
      	display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
    </style>
  </head>
  <body>
    <form action="" class="decor" method="post">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Notes</h1>
        <select class="dropdown" name="cnm" id="cnm">
            <option value="0">Select course</option>
            <option value="1">Core Java</option>
            <option value="2">Web Development</option>
            <option value="3">App Development</option>
            
          </select>

        <input type="text" placeholder="Student id" name="stid" id="stid">
        <textarea placeholder="Type note.." rows="5" name="textarea" id="textarea"></textarea>
        <button type="submit" href="/" id="submit" name="submit">Send</button>
      </div>
    </form>
  </body>
</html>