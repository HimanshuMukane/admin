<?php
session_start();
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_GET['update']))
{
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  mysqli_query("UPDATE teacherreg SET fname='$fname',lname='$lname',email='$email',contact='$contact' WHERE id='$id';");
    $result=mysqli_query($query);
    if($result){
        header("Location:admin-panel.php");
        echo "<script>alert('Your appointment successfully cancelled');</script>";
    } 
  else{
    header("Location:error1.php");
  }
}
?>