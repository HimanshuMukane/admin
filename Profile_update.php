<?php
session_start();
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_GET['update']))
{
	$F_NAME=$_POST['F_NAME'];
  $L_NAME=$_POST['L_NAME'];
  $gender=$_POST['gender'];
  $EMAIL_ID=$_POST['EMAIL_ID'];
  $MOBILE_NO=$_POST['MOBILE_NO'];
  mysqli_query("UPDATE teacherreg SET F_NAME='$F_NAME',L_NAME='$L_NAME',EMAIL_ID='$EMAIL_ID',MOBILE_NO='$MOBILE_NO' WHERE id='$id';");
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