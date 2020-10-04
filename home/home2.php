<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php
session_start();
require("connect.php");
mysqli_select_db($con,'teacher');

$stu_id=$_SESSION['stu_id'];
$_SESSION['stu_id']=$stu_id;

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

<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../Image/images(1).jpg" alt="banner1" class="banner">
      </div>

      <div class="item">
        <img src="../Image/learn-3653430_960_720.jpg" alt="banner2" class="banner">
      </div>
    
      <div class="item">
        <img src="../Image/classroom_layout_-_what_does_the_research_say_855_513_60.jpg" alt="slide" class="banner">
      </div>
    </div>

   <!--  Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>


<p>
<table class="member">
<tr>
<th class="a1">MEMBER'S AREA</th>
<th class="b1"></th>
<th class="a1">ASSIGNMENTS AND DOUBTS</th>
<th class="b1"></th>
<th class="a1">NOTES AND SUGGESTION</th>
</tr>
<tr>
<ul>
<td class="A1"><a href="member-area2.php" style="text-decoration:none;"><li><h7>Click o Visit</h7></li></a></td>
<td class="B1"></td>
<td class="A1"><a href="assignment.php" style="text-decoration:none;"><li><h7>Click o Visit</h7></li></a></td>
<td class="B1"></td>
<td class="A1"><a href="Notes and Suggestion.php" style="text-decoration:none;"><li><h7>Click o Visit</h7></li></a></td>
</ul>
</tr>
</table>
</p>

<p>
<table class="description">
<tr>
<th class="D1">Our Aim</th>
<th class="D2"></th>
<th class="D3">Why would you be admitted to our institution ?</th>
</tr>
<tr>
<td class="d1">
Join our mission to make study choice transparent, globally.

Every year, we change the lives of millions of students. We enable them to explore all their study options in one place and to find the best fit study programme that matches their needs, goals, and preferences. In order to succeed in this mission, we work with over 3,750+ universities, business schools, law schools, and pathway providers who are eager to diversify their campuses and attract the right students from all over the world.

Education choice continues to reach a broad, global scale; and more students are keen to study abroad than ever before. Bring your institution to where over 36 million prospective students are searching for their next study abroad opportunity. Ensure your institution's spotlight in the place where students will discover the amazing programmes you offer!
</td>
<td></td>
<td class="d3">
<video width="352px" height="auto" controls="controls">
  <source src="../Image/intro.mp4" type="video/mp4">
</video>
</td>
</tr>
</table>
</p>
</body>
</html>