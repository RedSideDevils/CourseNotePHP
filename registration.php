<?php

include "connect.php";
$conn = openCon();

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass_one']);
  $rep_pass = mysqli_real_escape_string($conn,$_POST['pass_two']);
  $avatar = mysqli_real_escape_string($conn,$_POST['avatar']);

  if($pass = $rep_pass){
    $sql = "INSERT INTO `accounts`(`name`,`lastname`,`email`,`password`,`avatar`) VALUES ('$name','$lastname','$email','$pass','$avatar')";
    mysqli_query($conn,$sql);
    header("Location: index.php");
  }else{
    ?>
    <script type="text/javascript">alert("Passwords do not match");</script>
  <?php   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    body{
      background-image: url(https://cutewallpaper.org/21/1920x1080-gif/A-Sunset-Gif-I-made-1920x1080p-vaporwaveasthetics.gif);
      background-size: cover;

    }
  </style>
</head>
<body>

  <!-- Start your project here-->  
  <div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="text-center">
<!-- Default form login -->
<!-- Default form register -->
<form class="text-center border border-light p-5 rounded z-depth-3" style="background-color: white;" method="post">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="lastname" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name='email' class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="pass_one" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>
    <input type="password" id="defaultRegisterFormPassword" name="pass_two" class="form-control" placeholder="Repeat Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>
    <input type="text" id="defaultRegisterFormPassword" name='avatar' class="form-control" placeholder="URL" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        Enter Avatar Image URL
    </small>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block juicy-peach-gradient text-dark" name='submit' type="submit">Sign Up</button>

</form>
<!-- Default form register -->
<!-- Default form login -->
      </div>
    </div>
  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
