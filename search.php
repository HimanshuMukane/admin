<?php
session_start();
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_POST['search_submit'])){
  $MOBILE_NO=$_POST['MOBILE_NO'];
  $docname = $_SESSION['dname'];
 $query="select * from appointmenttb where MOBILE_NO='$MOBILE_NO' and professor='$docname';";
 $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#342ac1;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>EMAIL_ID</th>
      <th>MOBILE_NO</th>
      <th>Appointment Date</th>
      <th>Appointment Time</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $F_NAME=$row['F_NAME'];
    $L_NAME=$row['L_NAME'];
    $EMAIL_ID=$row['EMAIL_ID'];
    $MOBILE_NO=$row['MOBILE_NO'];
    $appdate=$row['appdate'];
    $apptime=$row['apptime'];
    echo '<tr>
      <td>'.$F_NAME.'</td>
      <td>'.$L_NAME.'</td>
      <td>'.$EMAIL_ID.'</td>
      <td>'.$MOBILE_NO.'</td>
      <td>'.$appdate.'</td>
      <td>'.$apptime.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<div><a href="professor-panel.php" class="btn btn-light">Go Back</a></div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}

?>