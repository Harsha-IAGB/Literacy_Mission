<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Literacy Mission</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body class="grey lighten-3">
      <!--Main layout-->
    <main class="mt-5 mx-lg-5">
        <div class="container-fluid">
    <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="index.php" target="_blank">Home</a>
                        <span>/</span>
                        <span>NGO</span>
                    </h4>
                        <div class="text-right">
                        <a href="login.php" class="align-self-end">Login</a>
                        <a href="register.php">Signup</a>
                        </div>
                   
                 </div>
            </div>
            <!-- Heading -->
<div class="card card-cascade narrower mt-3" style="overflow-x: hidden;">

  <div class="row  d-flex align-items-center justify-content-center">
    <div class="col-md-6 mx-auto">
      <div class="md-form">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Ngos..." title="Type in a name">
     </div>
    </div>
    <div class="col-md-3 mx-auto">
      <button class="btn btn-primary waves-light btn-sm" mdbWavesEffect >Generate CSV</button>
    </div>
  </div>
  <div class="px-2">
    <!--Table-->
    <table class="table table-hover table-responsive-md mb-0">
        <thead class="thead-dark">
      <tr>
          <th>Id</th>
          <th>Ngo Name</th>
      </tr>
      </thead>
      
   
<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
if($db-> connect_error){
    die("Connection failed: ". $db->connect_error);
    }
    
    $sql = "SELECT id, ngo_name FROM ngo";
    $result = $db-> query($sql);
    if($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["id"] ."</td><td>" .$row["ngo_name"] ."</td></tr>";
        }
        echo "</table>";
        
    }
        else {
        echo "0 result";
        }
        $db -> close();
?>

  </div>
  </div>
    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
        </div>
    </div>
    </div>
    </main>
 </body>
</html>