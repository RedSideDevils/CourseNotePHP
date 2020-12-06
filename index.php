<?php  

  include "connect.php";
  $conn = openCon();

  if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$pass'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);

    if($count == 1){
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;
      header("Location: home.php");
    }else{
      ?>
      <script type="text/javascript">alert("Something Wrong")</script>
      <?php 
    }

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
<form class="text-center border border-light rounded z-depth-3 p-5" style="background-color: white;" method="post">

    <p class="h4 mb-4 ">Sign in</p>

    <!-- Email -->
    <input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" name="pass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">


    <!-- Sign in button -->
    <button class="btn btn-dark btn-block my-4" name="submit" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="registration.php">Register</a>
    </p>

    <!-- Social login -->

</form>
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
