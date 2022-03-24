<?php
session_start();
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_POST['adsub'])){
	$username=$_POST['username1'];
	$password=$_POST['PASSWORD2'];
	$query="select * from admintb where username='$username' and PASSWORD='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel1.php");
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid username or password. Try Again!');
          window.location.href = 'index.php';</script>");
}
if(isset($_POST['update_data']))
{
	$MOBILE_NO=$_POST['MOBILE_NO'];
	$status=$_POST['status'];
	$query="update appointmenttb set payment='$status' where MOBILE_NO='$MOBILE_NO';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:updated.php");
}




function display_docs()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		# echo'<option value="" disabled selected>Select professor</option>';
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}

if(isset($_POST['doc_sub']))
{
	$name=$_POST['name'];
	$query="insert into doctb(name)values('$name')";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:adddoc.php");
}
