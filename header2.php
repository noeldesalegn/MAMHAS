<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Physician</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* CSS styles here */
    <style>
  
  .navbar {
    background-color: #800015;
  }

  @keyframes glowing {
    0% {
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    }
    50% {
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.9);
    }
    100% {
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    }
  }
       .btn-long {
    width: 100%;
  }
  .btn-primary {
    background-color: #ff335;
    background-image: linear-gradient(to right, #ff3355, #9c1c63);
    color: white;
    border: none;
  }
      label {
    font-weight: bold;
  }
  
  .btn-primary {
    margin-right: 10px;
  }
  
  .btn-default {
    color: #333;
  }
  .navbar-brand {
    display: flex;
    align-items: center;
    color: white;
    font-weight: bold;
  }
  
  .navbar-brand img {
    margin-right: 5px;
  }
  nav{
      position: fixed; 
      z-index: 1;
      top: 0;
      overflow-x: hidden;
        width: 100%; 
         overflow: hidden;
  }
     .image1{
border-radius: 50%;
}
  </style>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-black fixed-top bg-red">
  <div class="container-fluid">
    <a class="navbar-brand" href="view_profile.php">
      <?php 
      if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $query1 = "SELECT photo FROM user WHERE id = $id";
        $result1 = mysqli_query($conn, $query1);
        $data = mysqli_fetch_assoc($result1);
        echo '<img src="images/' . $data['photo'] . '" class="image1" width="50" height="50">';
        echo '<span style="color:white;">' . $_SESSION['user_account_name'] . '</span>';
      }
      ?>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="header.php" class="btn btn-warning"><i class="fa fa-home"> | Home</i></a>
        </li>
        <br>
        <li class="nav-item">
          <a href="view_profile.php" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> | Profile</a>
        </li>
        <br>
        <li class="nav-item">
          <a href="contact_us.php" class="btn btn-info"><i class="fa fa-comment" aria-hidden="true"></i> | Contact </a>
        </li>
        <br>
        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> | Logout</a>
        </li>
        <li class="nav-item">
          <div id="google_translate_element"></div>
          <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement(
                { pageLanguage: 'en' },
                'google_translate_element'
              );
            }
          </script>
          <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
          </script>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br><br>
<br>
</body>
</html>
