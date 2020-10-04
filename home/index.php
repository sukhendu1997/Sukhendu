<?php
session_start();
if(!$_SESSION['teacher'])
{
    header('location:login3.php');
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>UI Dashboard Website</title>
  <!-- Font Awesome -->
  
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- custom styles  -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  
  <!-- navigation menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a href="#" class="navbar-brand text-warning">&nbsp;&nbsp;
        <i class="fa fa-user-circle" aria-hidden="false"></i> Teachers admin panel</a>
        <button class="navbar-toggler " data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-chart-bar"></i> Dashboard</a>
          </li>
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <div class="dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                <i class="fas fa-id-badge"></i> Assignments</a>
              <div class="dropdown-menu">
                <a href="assignment2.php" class="dropdown-item">Upload Assignment</a>
                <a href="submitted.php" class="dropdown-item">Submitted Assignment</a>
         
          <li class="nav-item">
            <a href="stu_info.php" class="nav-link">
              <i class="fas fa-users"></i> Students</a>
          </li>
        </ul>
        
        
          <li class="nav-item ">
            <a href="Logout2.php" class="nav-link">
	
			  <i class="fas fa-sign-out-alt" ></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  <!-- navigation menu ends here -->
  <!-- creating headin of dashboard -->
    <div class=" py-3 text-white" style="background-color: teal">
      <h1>&nbsp;&nbsp;<i class="fas fa-chart-bar"></i> Dashboard</h1>
    </div>
    <div class="bg-light p-3">
     
    <div class="row">
       <div class="col-md-4">
         <a href="suggestion.php" class="btn btn-primary d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;NEW Suggestion</a>
       </div>
       <div class="col-md-4">
         <a href="note.php" class="btn btn-success d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;NEW NOTE</a>
       </div>
       <div class="col-md-4">
         <a href="doubt_display.php" class="btn btn-warning d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;DISCUSSION</a>
       </div>
    </div>
  </div>
<!-- creating table -->
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th>Serial No</th>
              <th>Title</th>
              <th>Course Name</th>
              
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Post One</td>
              <td>Core Java</td>
              <td>28 April 2019</td>
              <td><a href="details1.php" class="btn btn-outline-secondary btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Post two</td>
              <td>Web Development</td>
              <td>28 April 2019</td>
              <td><a href="details2.php" class="btn btn-outline-secondary btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Post three</td>
              <td>App Development</td>
              <td>28 April 2019</td>
              <td><a href="details3.php" class="btn btn-outline-secondary btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            
          </tbody>
        </table>





<!--===============================================================================================-->  

<!--===============================================================================================-->
  <script src="js/main.js"></script>

  
  <!-- dashboard heading ends -->
  <!-- dashboaRd contet start -->
  
        <!-- creating table -->
        
  
  <!-- dashboard content ends -->
  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
