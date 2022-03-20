<!DOCTYPE html>
<?php 
include('func.php');  
include('newfunc.php');
$con=mysqli_connect("localhost","root","","admindb");

  $pid = $_SESSION['pid'];
  $F_NAME = $_SESSION['F_NAME'];
  $EMAIL_ID = $_SESSION['EMAIL_ID'];
  $F_NAME = $_SESSION['F_NAME'];
  $gender = $_SESSION['gender'];
  $L_NAME = $_SESSION['L_NAME'];
  $DOB = $_SESSION['DOB'];
  $CONF_DATE = $_SESSION['CONF_DATE'];
  $MOBILE_NO = $_SESSION['MOBILE_NO'];


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

            

            <div class="container">
                <div class="item_wrap">
                    <form action="" method="POST">
            <?php
            $con=mysqli_connect("localhost","root","","admindb");

            $ids = $_GET['pid'];
            $showquery = "SELECT * FROM `teacherreg` WHERE id={$ids}";
            $showdata = mysqli_query($con, $showquery);
            $arrdata = mysqli_fetch_array($showdata);

            if (isset($_POST['submit'])) {

                $idupdate = $_GET['pid'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $degree = $_POST['degree'];
                $reference = $_POST['reference'];

                $updatequery = "UPDATE `teacherreg` SET `name`='$name',`email`='$email',`phone`='$phone',`degree`='$degree',`reference`='$reference' WHERE id=$idupdate";
            
                $res = mysqli_query($con, $updatequery);

                if ($res) {
            ?>
                    <script>
                        alert("data updated properly");
                    </script>
                    <?php
                    }else{
                    ?>
                    <script>
                        alert("data not updated properly");
                    </script>
            <?php
                }
            }
            ?>
            <div class="form-group">
                <label for="F_NAME">F_NAME</label>
                <input type="text" name="name" value="<?php echo $arrdata['F_NAME']; ?>" class="form-control" id="F_NAME" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="email">EMAIL_ID</label>
                <input type="email" name="EMAIL_ID" value="<?php echo $arrdata['EMAIL_ID']; ?>" class="form-control" id="EMAIL_ID" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="name">phone</label>
                <input type="number" name="phone" value="<?php echo $arrdata['phone']; ?>" class="form-control" id="phone" aria-describedby="phoneHelp">
            </div>
            <div class="form-group">
                <label for="name">degree</label>
                <input type="text" name="degree" value="<?php echo $arrdata['degree']; ?>" class="form-control" id="degree" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="name">reference</label>
                <input type="text" name="reference" value="<?php echo $arrdata['reference']; ?>" class="form-control" id="reference" aria-describedby="emailHelp">
            </div>



            <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
                </div>

            </div>
        </div>
    </div>
    <br>
            </div>
            <div class="col-md-8" style="margin-top: 3%;">
                <div class="tab-content" id="nav-tabContent" style="width: 950px;">
                    <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                        <div class="container-fluid container-fullw bg-white">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">
                    <br>
                </div>

                <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

                    <br>
                </div>

                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <form class="form-group" method="post" action="func.php">
                        <label>professors name: </label>
                        <input type="text" name="name" placeholder="Enter professors name" class="form-control">
                        <br>
                        <input type="submit" name="doc_sub" value="Add professor" class="btn btn-primary">
                    </form>
                </div>
                <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
            </div>
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