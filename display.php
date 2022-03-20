<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'links.php'?>
</head>

<body>
    <div class="main-div">
        <h1>list of candidate</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                            <th scope="col">F_NAME</th>
                            <th scope="col">L_NAME</th>
                            <th scope="col">MAR_ST</th>
                            <th scope="col">EMAIL_ID</th>
                            <th scope="col">MOBILE_NO</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">DOB</th>
                            <th scope="col">CONF_DATE</th>
                            <th scope="col">UPDATE</th>
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $con=mysqli_connect("localhost","root","","admindb");
                        global $con;
                        $query = "select * from teacherreg";
                        $result = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($result)){

                        ?>

                            <tr>
                            <td><?php echo $res['pid']; ?></td>
                                <td><?php echo $res['F_NAME']; ?></td>
                                <td><?php echo $res['L_NAME']; ?></td>
                                <td><?php echo $res['MAR_ST']; ?></td>
                                <td><?php echo $res['EMAIL_ID']; ?></td>
                                <td><?php echo $res['MOBILE_NO']; ?></td>
                                <td><?php echo $res['PASSWORD']; ?></td>
                                <td><?php echo $res['DOB']; ?></td>
                                <td><?php echo $res['CONF_DATE']; ?></td>
                                <td> <a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" title="update">update<i class="fa-regular fa-box-archive"></i></a></td>
                                
                            </tr>
                        <?php

                        }


                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>