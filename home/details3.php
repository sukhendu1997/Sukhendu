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

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 align="center">App Development Course</h1>
	<br>
    <div class="container">
	
       <?php
       	   $sql="select *from notes where course_name=3";
		   $result=mysqli_query($conn,$sql);
		   if(mysqli_num_rows($result)>0)
		   {
		       echo '<table class="table">';
			     echo "<thead>";
			        echo "<tr>";
				       echo "<th>Student Id</th>";
				       echo "<th>Course Name</th>";
				       echo "<th>Notes</th>";
				    echo "</tr>";
			     echo "</thead>";
				 echo "<tbody>";
				       while($row=mysqli_fetch_assoc($result))
					   {
					        echo "<tr>";
							   echo "<td>".$row["stu_id"]."</td>";
							   echo "<td>".$row["course_name"]."</td>";
							   echo "<td>".$row["notes"]."</td>";
							echo "</tr>";
					   }		
				 echo "</tbody>";
			   echo '</table>';	
            }			   
	   ?>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>