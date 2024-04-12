<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Inportan to make website responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css file -->
        <link rel="stylesheet" href="css/style2.css">

    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
      background-image: url("images/tele.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      }
    </style>
</head>
<body>
<?php
   session_start();
  include "config.php";
            $sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."' ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($_SESSION['user_account_type'] == 'admin' and $row['first_time']=='1') {
      include "header2.php" ;
          $sql = "SELECT * FROM `user` ";
    $query =  mysqli_query($conn, $sql);

  ?>
    <center> <span class="message"><div class="message">
	 <body onLoad="aler('WELCOME DEAR ADMIN !');" >
       <?php //echo "Today is ". date('d F Y, h:i:s A'); ?>
    <h2>  <center>  <span class="btn btn-secondary btn-long">
    <? date_default_timezone_set('Africa/Nairobi');

$hour = date('H', time());

if( $hour > 6 && $hour <= 11) {
  echo "Good Morning";
}
else if($hour > 11 && $hour <= 16) {
  echo "Good Afternoon";
}
else if($hour > 16 && $hour <= 23) {
  echo "Good Evening";
}
else {
  echo "";
} ?>
    &nbsp&nbsp <?php echo $_SESSION['FName'];?>&nbsp&nbsp<?php echo $_SESSION['LName']." &nbsp" ."!";?></span></h2></center>

    <br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/ga.png" alt="Image" width="70" height="70">
    <p ><strong>Register New User</strong></p>
<a href="add_user_for_admin.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Register</a>
  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/cloud.png" alt="Image" width="70" height="70">
    <p ><strong>Manage User</strong></p>
       <a href="detail.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">Manage</a>
  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/comment.png" alt="Image" width="70" height="70">
    <p ><strong>Feed Back</strong></p>
       <a href="feedback.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">Feedback</a>
  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/manage.png" alt="Image" width="60" height="60">
    <p ><strong>Manage User Login Acvities </strong></p>
    <a href="user_login.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow"><i class="fa fa-wrench" aria-hidden="true"> | Manage users </i></a>

  </div>
<br>
</body>
</html>
<?php
	}
	else {
	
        		header('location:index.php');
              $_SESSION['flash_message']="Please Login";
	}
?>