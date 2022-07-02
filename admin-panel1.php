    <!DOCTYPE html>
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

  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 80vw;margin-left: 8vw;">
      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
            </div>
              <div class="col-md-8">
    </div>
    
    <div class="search">
	<input class="search-input" type="text" placeholder="Search">
</div>
   
<table id="table" class="table-responsive table table-hover">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mail</th>
                  <th>MOBILE_NO</th>
                  <th>Date of Joining</th>
                  <th>Date of Leaving</th>
                  <th>Branch</th>
                  <th>Update</th>
                  </tr>
                </thead>
                    <tbody>
                        <?php
                     $i=0;
                    $con=mysqli_connect("localhost","root","","admindb");
                    global $con;
                    $query = "select * from teacherreg";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                            echo '<tr class="main">';
                            echo '<td>' . $row['pid'] . '</td>';                    
                            echo '<td>' . $row['F_NAME'] . '</td>';
                            echo '<td>' . $row['L_NAME'] . '</td>';
                            echo '<td>' . $row['MAR_ST'] . '</td>';
                            echo '<td>' . $row['EMAIL_ID'] . '</td>';
                            echo '<td>'.$row['MOBILE_NO'].'</td>';
                            echo '<td>'.$row['DOB'].'</td>';
                            echo '<td>'.$row['CONF_DATE'].'</td>';
                            echo '<td>'.'<a class="update" href="update.php?id='.$row['pid'].'">Update</a> '.'</td>';
                            echo '</tr>';  
                $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
      
        <br>
      </div>
    
<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

    </div>
  </div>
</div>
   </div>
   <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script id="rendered-js" >
// get input field and add 'keyup' event listener
let searchInput = document.querySelector('.search-input');
searchInput.addEventListener('keyup', search);

// get all title
let titles = document.querySelectorAll('.main');
let searchTerm = '';
let tit = '';

function search(e) {
// get input fieled value and change it to lower case
searchTerm = e.target.value.toLowerCase();

titles.forEach(title => {
  // navigate to p in the title, get its value and change it to lower case
  tit = title.textContent.toLowerCase();
  // it search term not in the title's title hide the title. otherwise, show it.
  tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
});
}
  </script>
  </body>
</html>