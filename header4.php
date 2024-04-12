  <?php 
  session_start();
  include "config.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>MAMHAS</title>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <style>
    body{
       // background-image:url('images/home.jpg');
        //background-repeat: repeat-y;
        //width:100%;
          background-color: #ffffff;

    }
    .navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
          width: 100%; /* Full width */

    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    ul {
  list-style-type: none;
}
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="header.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="navbar-nav">
        <li class="nav-item">
        <a  href="header.php" class="btn btn-warning"><i class="fa fa-home" aria-hidden="true" > | Home</i></a>
        </li>
        
        <li class="nav-item">
        <a href="view_profile.php" class="btn btn-success" > <i class="fa fa-user" aria-hidden="true" ></i> | Profile</a>
        </li>
        
           <li class="nav-item">
        <a href="contact_us.php" class="btn btn-info" > <i class="fa fa-comment" aria-hidden="true" ></i> | Contact </a>
        </li>
        
        <li class="nav-item">
                <a  href="logout.php" class="btn btn-danger" ><i class="fa fa-sign-out" aria-hidden="true"></i> | Logout</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
