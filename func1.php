<?php
session_start();
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_POST['patsub'])){
	$EMAIL_ID=$_POST['EMAIL_ID'];
	$PASSWORD=$_POST['PASSWORD'];
	$query="select * from teacherreg where EMAIL_ID='$EMAIL_ID' and PASSWORD='$PASSWORD';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		      $_SESSION['EMAIL_ID']=$row['EMAIL_ID'];
    }
		header("Location:admin-panel.php");
	}
	else{
    // header("Location:error2.php");
    echo("<script>alert('Invalid EMAIL_ID or PASSWORD. Try Again!');
          window.location.href = 'index.php';</script>");
  }
}
function display_docs()
{
	global $con;
	$query="select * from teacherreg";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		# echo'<option value="" disabled selected>Select professor</option>';
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}