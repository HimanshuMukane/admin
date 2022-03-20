<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/cwhphp/21_Get_Post.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container mt-3">
        <h1>Contact us for your concerns</h1>
        <a href="display.php">check form</a>
        <form action="" method="POST">
            <?php
            include 'connection.php';

            $ids = $_GET['id'];
            $showquery = "SELECT * FROM `teacherreg` WHERE id={$ids}";
            $showdata = mysqli_query($con, $showquery);
            $arrdata = mysqli_fetch_array($showdata);


            if (isset($_POST['submit'])) {

                $idupdate = $_GET['id'];

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
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $arrdata['name']; ?>" class="form-control" id="name" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $arrdata['email']; ?>" class="form-control" id="email" aria-describedby="emailHelp">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>



<?php
include 'connection.php'
?>