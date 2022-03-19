<?php
// session_start();
$con=mysqli_connect("localhost","root","","admindb");
// if(isset($_POST['submit'])){
//  $F_NAME=$_POST['F_NAME'];
//  $PASSWORD=$_POST['PASSWORD'];
//  $query="select * from logintb where F_NAME='$F_NAME' and PASSWORD='$PASSWORD';";
//  $result=mysqli_query($con,$query);
//  if(mysqli_num_rows($result)==1)
//  {
//   $_SESSION['F_NAME']=$F_NAME;
//   $_SESSION['pid']=
//   header("Location:admin-panel.php");
//  }
//  else
//   header("Location:error.php");
// }
if(isset($_POST['update_data']))
{
 $MOBILE_NO=$_POST['MOBILE_NO'];
 $status=$_POST['status'];
 $query="update appointmenttb set payment='$status' where MOBILE_NO='$MOBILE_NO';";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:updated.php");
}

// function display_docs()
// {
//  global $con;
//  $query="select * from doctb";
//  $result=mysqli_query($con,$query);
//  while($row=mysqli_fetch_array($result))
//  {
//   $F_NAME=$row['F_NAME'];
//   $price=$row['docFees'];
//   echo '<option value="' .$F_NAME. '" data-value="'.$price.'">'.$F_NAME.'</option>';
//  }
// }


function display_specs() {
  global $con;
  $query="select distinct(spec) from doctb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {
    $spec=$row['spec'];
    echo '<option data-value="'.$spec.'">'.$spec.'</option>';
  }
}

function display_docs()
{
 global $con;
 $query = "select * from doctb";
 $result = mysqli_query($con,$query);
 while( $row = mysqli_fetch_array($result) )
 {
  $F_NAME = $row['F_NAME'];
  $price = $row['docFees'];
  $spec = $row['spec'];
  echo '<option value="' .$F_NAME. '" data-value="'.$price.'" data-spec="'.$spec.'">'.$F_NAME.'</option>';
 }
}

// function display_specs() {
//   global $con;
//   $query = "select distinct(spec) from doctb";
//   $result = mysqli_query($con,$query);
//   while($row = mysqli_fetch_array($result))
//   {
//     $spec = $row['spec'];
//     $F_NAME = $row['F_NAME'];
//     echo '<option value = "' .$spec. '">'.$spec.'</option>';
//   }
// }


if(isset($_POST['doc_sub']))
{
 $F_NAME=$_POST['F_NAME'];
 $query="insert into doctb(F_NAME)values('$F_NAME')";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:adddoc.php");
}

?>