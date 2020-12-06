<?php  
  include "connect.php";
  $conn = openCon();
  session_start();

  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
  }else{
    header("Location: index.php");
  }

  $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$pass'";
  $result = mysqli_query($conn,$sql);
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
      <div class="text-left">
        <div class="container my-5 py-5 z-depth-1" style="background-color: white;">
          <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="col-md-4 mb-5">

              <img src="<?php echo $row['avatar']; ?>" class='rounded-circle img-fluid' width="300" height="300">
            </div> 
            <div class="col-md-8">
              <p class="ml-4 mt-4 font-weight-bold"><?php echo $row['name']." ".$row['lastname']; ?></p>
              <p class="ml-4"><?php echo $row['email']; ?></p>
              <a href="exit.php" class="ml-4 btn btn-purple darken-1">Add Note</a><a href="exit.php" class="ml-4 btn btn-dark">Sign Out</a>
            </div>
            <?php } ?>
            <div class="col-md-4">

            </div>
          </div>
        </div>
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
