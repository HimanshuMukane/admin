<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "admindb";

 $con=mysqli_connect($servername,$username,$password,$database);
if($con){
    // echo"connection successfull";
    ?>
    <?php

}
else{
    echo "no connection";
    // die("no connection".mysqli_connect_errno());
}


