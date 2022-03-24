<!DOCTYPE html>
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
<?php
include 'connection.php';


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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
