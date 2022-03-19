<?php 
$con=mysqli_connect("localhost","root","","admindb");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$EMAIL_ID = $_POST['txtEMAIL_ID'];
	$MOBILE_NO = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];

	$query="insert into MOBILE_NO(name,EMAIL_ID,MOBILE_NO,message) values('$name','$EMAIL_ID','$MOBILE_NO','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "MOBILE_NO.html";';
		echo '</script>';
    }
}