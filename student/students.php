<?php 
//insertion of dblogin.php on this current script
//establish connection to database thru an external php script named dblogin.php
require_once("dblogin.php"); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>

<body>
<div class="row register-form">
<div class="col-md-12">
    <nav class="navbar navbar-default navbar-fixed-top custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Student<span>information </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="#">Registered Students</a></li>
                    <li role="presentation"><a href="index.php">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
<br><br><br><br><br> 
<div class="col-md-8 col-md-offset-2">
        <h2><span class="label label-info">List of Registered Students</span></h2> <br>
        <table class="table table-condensed table-striped table-bordered">

                  <tr>
                    <th><center>Transaction Number</center></th>
                    <th><center>First Name</center></th>
                    <th><center>Last Name</center></th>
                    <th><center>Course</center></th>
                    <th><center>Year Level</center></th>
                    <th><center>Date Registered</center></th>
                  </tr>
              
<?php
        //query to get the data on the database inside the student_info table
          $query = mysqli_query($mysqli, "SELECT * FROM `student_info`");

        //converting data into an array and fetching the data thru its corresponding index from the array and placing it inside a table data tag
          while($result = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td><center>" . $result['Student_ID'] . "</center></td>";
            echo "<td>" . $result['First_Name'] . "</td>";
            echo "<td>" . $result['Last_Name'] . "</td>";
            echo "<td>" . $result['Course'] . "</td>";
            echo "<td>" . $result['Year_Level'] . "</td>";
            echo "<td><center>" . $result['Date'] . "</center></td>";
            echo "</tr>";
    }
?>

        </table>
          
</div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>