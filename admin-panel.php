<!DOCTYPE html>
<?php
include 'connection.php';
include('func.php');  
include('newfunc.php');


if (isset($_POST['submit'])) {

    $F_NAME = $_POST['F_NAME'];
    $EMAIL_ID = $_POST['EMAIL_ID'];
    $MOBILE_NO = $_POST['MOBILE_NO'];
    $DOB = $_POST['DOB'];
    $L_NAME = $_POST['lastname'];

    $insertquery = "INSERT INTO `teacherreg` ( `F_NAME`, `EMAIL_ID`, `MOBILE_NO`, `DOB`, `lastname`) VALUES ('$F_NAME', '$EMAIL_ID', '$MOBILE_NO', '$DOB', '$L_NAME')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
?>
        <script>
            alert("data insert properly");
        </script>
    <?php

    } else {
    ?>
        <script>
            alert("data not insert properly");
        </script>
<?php

    }
}
?>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Administration Module </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <style>
            .bg-primary {
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            }
            
            .list-group-item.active {
                z-index: 2;
                color: #fff;
                background-color: #342ac1;
                border-color: #007bff;
            }
            
            .text-primary {
                color: #342ac1!important;
            }
            
            .btn-primary {
                background-color: #3c50c1;
                border-color: #3c50c1;
            }
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<style type="text/css">
    button:hover {
        cursor: pointer;
    }
    
    #inputbtn:hover {
        cursor: pointer;
    }
</style>

<body style="padding-top:50px;">

    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp
            <?php echo $F_NAME ?>
        </h3>
        <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-prof" id="list-prof-list"  role="tab"    aria-controls="home" data-toggle="list">professor List</a>
      
    </div><br>
  </div>
        <div class="wrapper">
        <div class="main_body">



    <div class="container mt-3">
        <h1>Contact us for your concerns</h1>
        <a href="display.php">check form</a>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="" class="form-control" id="name" aria-describedby="EMAIL_IDHelp">
            </div>

            <div class="form-group">
                <label for="EMAIL_ID">EMAIL_ID</label>
                <input type="EMAIL_ID" name="EMAIL_ID" class="form-control" value="" id="EMAIL_ID" aria-describedby="EMAIL_IDHelp">
            </div>
            <div class="form-group">
                <label for="name">MOBILE_NO</label>
                <input type="number" name="MOBILE_NO" value="" class="form-control" id="MOBILE_NO" aria-describedby="MOBILE_NOHelp">
            </div>
            <div class="form-group">
                <label for="name">DOB</label>
                <input type="text" name="DOB" value="" class="form-control" id="DOB" aria-describedby="EMAIL_IDHelp">
            </div>
            <div class="form-group">
                <label for="name">lastname</label>
                <input type="text" name="lastname" value="" class="form-control" id="lastname" aria-describedby="EMAIL_IDHelp">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </script>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script id="rendered-js">
    $(".hamburger").click(function() {
        $(".wrapper").toggleClass("active");
    });
</script>


</body>

</html>