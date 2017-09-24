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
    <title>Student Information</title>
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
                            <li role="presentation"><a href="students.php">Registered Students</a></li>
                             
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
       <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" action="" method="post">
                <h1>Student Registration Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">First Name </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required name="first">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Last Name </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required name="last">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Course </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required name="course">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="repeat-pawssword-input-field">Year Level </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required name="year">
                    </div>
                </div>
                 
                
                <button class="btn btn-success submit-button" type="submit" name="register">Register</button>
<?php
  
  if(isset($_POST['register'])) {
     //declaration of variables and their values
      $first = trim($_POST['first']);
      $last = trim($_POST['last']);
      $course=trim($_POST['course']);
      $year = trim($_POST['year']);
      //date format and declaration. gets the default date and time set of the server
      $now=date('Y-m-d H:i:s');

      //contacting database to insert data
      $querry = "INSERT INTO `student_info` (`First_Name`, `Last_Name`, `Course`, `Year_Level`, `Date`) VALUES ('$first', '$last', '$course', '$year', '$now')";

      //stating if condition for notifications after data inserted to the database
      if(mysqli_query($mysqli, $querry)) {    

      //localhost javascript alert if the data succeeded on inserting to database and reloads index.php ready for another transaction
      echo "<script>alert('You have been registered!'); window.location='index.php'; </script>";
    }
}
  ?>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>