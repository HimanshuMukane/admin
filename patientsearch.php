<!DOCTYPE html>
 <?php #include("func.php");?>
<html>
<head>
	<title>Teacher Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
include("newfunc.php");
if(isset($_POST['Teacher_search_submit']))
{
	$MOBILE_NO=$_POST['Teacher_MOBILE_NO'];
	$query = "select * from teacherreg where MOBILE_NO= '$MOBILE_NO'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['L_NAME']=="" & $row['EMAIL_ID']=="" & $row['MOBILE_NO']=="" & $row['PASSWORD']==""){
    echo "<script> alert('No entries found! Please enter valid details'); 
          window.location.href = 'admin-panel1.php#list-doc';</script>";
  }
  else {
    echo "<div class='container-fluid' style='margin-top:50px;'>
	<div class='card'>
	<div class='card-body' style='background-color:#342ac1;color:#ffffff;'>
<table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>EMAIL_ID</th>
      <th scope='col'>MOBILE_NO</th>
      <th scope='col'>PASSWORD</th>
    </tr>
  </thead>
  <tbody>";

	
		    $F_NAME = $row['F_NAME'];
        $L_NAME = $row['L_NAME'];
        $EMAIL_ID = $row['EMAIL_ID'];
        $MOBILE_NO = $row['MOBILE_NO'];
        $PASSWORD = $row['PASSWORD'];
        echo "<tr>
          <td>$F_NAME</td>
          <td>$L_NAME</td>
          <td>$EMAIL_ID</td>
          <td>$MOBILE_NO</td>
          <td>$PASSWORD</td>
        </tr>";
    
	echo "</tbody></table><center><a href='admin-panel1.php' class='btn btn-light'>Back to dashboard</a></div></center></div></div></div>";
}
  }
	
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</body>
</html>