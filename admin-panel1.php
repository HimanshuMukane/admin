<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","admindb");

include('newfunc.php');

if(isset($_POST['docsub']))
{
  $professor=$_POST['professor'];
  $dPASSWORD=$_POST['dPASSWORD'];
  $dEMAIL_ID=$_POST['dEMAIL_ID'];
  $spec=$_POST['special'];
  $docFees=$_POST['docFees'];
  $query="insert into doctb(F_NAME,PASSWORD,EMAIL_ID,spec,docFees)values('$professor','$dPASSWORD','$dEMAIL_ID','$spec','$docFees')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('professor added successfully!');</script>";
  }
}

if(isset($_POST['docsub1']))
{
  $dEMAIL_ID=$_POST['dEMAIL_ID'];
  $query="delete from doctb where EMAIL_ID='$dEMAIL_ID';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('professor removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
    <link rel='stylesheet' href='https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Administration Module </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dPASSWORD').value ==
    document.getElementById('cdPASSWORD').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
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

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME ADMIN </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-prof" id="list-prof-list"  role="tab"    aria-controls="home" data-toggle="list">professor List</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">professor List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-prof" onclick="clickDiv('#list-prof-list')">
                          View professors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                </div>
                        
              </div>
            </div>
      
                

      <div class="tab-pane fade" id="list-prof" role="tabpanel" aria-labelledby="list-home-list">
              
              <div class="col-md-8">
    </div>
    <table id="table" data-toggle="table" data-search="true" data-filter-control="true" data-click-to-select="true" data-toolbar="#toolbar" class="table-responsive table table-hover">
                <thead>
                  <tr>
                  <th data-field="F_NAME" data-filter-control="input" data-sortable="true" scope="col">First Name</th>
                  <th data-field="L_NAME" data-filter-control="input" data-sortable="true" scope="col">Last Name</th>
                  <th data-field="MAR_ST" data-filter-control="input" data-sortable="true" scope="col">Mail</th>
                  <th data-field="EMAIL_ID" data-filter-control="select" data-sortable="true" scope="col">Gender</th>
                  <th data-field="MOBILE_NO" data-filter-control="input" data-sortable="true" scope="col">MOBILE_NO</th>
                  <th data-field="PASSWORD" data-filter-control="input" data-sortable="true" scope="col">Date of Joining</th>
                  <th data-field="DOB" data-filter-control="input" data-sortable="true" scope="col">Date of Leaving</th>
                  <th data-field="CONF_DATE" data-filter-control="select" data-sortable="true" scope="col">Branch</th>
                  <th>Update</th>
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
                      <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['F_NAME'];?></td>
                        <td><?php echo $row['L_NAME'];?></td>
                        <td><?php echo $row['MAR_ST'];?></td>
                        <td><?php echo $row['EMAIL_ID'];?></td>
                        <td><?php echo $row['MOBILE_NO'];?></td>
                        <td><?php echo $row['DOB'];?></td>
                        <td><?php echo $row['CONF_DATE'];?></td>
                        <td>EDIT
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>
    
<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
    <script src='https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>
    <script id="rendered-js">
        //exporte les données sélectionnées
        var $table = $('#table');
        $(function() {
            $('#toolbar').find('select').change(function() {
                $table.bootstrapTable('refreshOptions', {
                    exportDataType: $(this).val()
                });

            });
        });

        var trBoldBlue = $("table");

        $(trBoldBlue).on("click", "tr", function() {
            $(this).toggleClass("bold-blue");
        });

    </script>

  </body>
</html>