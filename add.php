<?php
  include 'connect.php';
  $conn = OpenCon();
  session_start();

  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];   
  }else{
    header("Location: index.php");
  }

  if(isset($_POST['submit'])){
    $keyword = $_SESSION['email'].$_SESSION['pass'];
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $text = mysqli_real_escape_string($conn,$_POST['text']);
    $status = "0";
    $sql = "INSERT INTO `notes`(`title`, `description`, `status`, `author`) VALUES ('$title','$text','$status','$keyword')";
    mysqli_query($conn,$sql);
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
          <!-- Default form contact -->
      <form class="text-center border border-light p-5 rounded z-depth-3" style="background-color: white;" method="post">
          <a href="home.php">Go Back...</a>
          <br>
          <br>
          <p class="h4 mb-4">Add Note</p>

          <!-- Name -->
          <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Title" name='title'>

          <div class="form-group">
              <textarea name='text' class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
          </div>

          <!-- Send button -->
          <button class="btn btn-orange btn-block" name='submit' type="submit">Add</button>

      </form>
<!-- Default form contact -->
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
