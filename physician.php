<!DOCTYPE html>
<html lang="en">

<head> 
<title>MAMHAS</title>
<link rel="icon" type="image/png" href="images/hospital (2).png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .container {
      transition: all 0.5s ease;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 25px;
      opacity: 0;
    }
body{
     background: linear-gradient(45deg, red, blue);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;}
    .fade-in {
      animation: fade-in 1s ease forwards;
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<?php
  include "config.php";
  session_start();
  $sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."' ";
  $query =  mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  if($_SESSION['user_account_type'] == 'physician' and $row['first_time']=='1') {
    include "header2.php" ;
        
  ?>
 <body onLoad="aler('WELCOME DEAR PHYSICIAN !');" >
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
    &nbsp&nbsp <?php echo $_SESSION['FName'];?>&nbsp&nbsp<?php echo $_SESSION['LName'] ." &nbsp" ."!";?></span></h2></center>

    <div class="container fade-in">
      <div style="text-align: center;">
        <img class="text-focus-in" src="images/ga.png" alt="Image" width="60" height="60">
        <p><strong>Give advice for pregnant moms</strong></p>
        <a href="mother_list.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Give Advice</a>
      </div>
    </div>
    <div class="container fade-in">
      <div style="text-align: center;">
        <img class="text-focus-in" src="images/cloud.png" alt="Image" width="60" height="60">
        <p><strong>upload information for the mother</strong></p>
        <a href="post.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Upload Information</a>
      </div>
    </div>
    <div class="container fade-in">
      <div style="text-align: center;">
        <img class="text-focus-in" src="images/medical.png" alt="Image" width="60" height="60">
        <p><strong>Manage appointment by set, edit and view appointment </strong></p>
        <a href="View_appointment.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Manage Appointment</a>
      </div>
    </div>
    <div class="container fade-in">
      <div style="text-align: center;">
        <img class="text-focus-in" src="images/medications.png" alt="Image" width="60" height="60">
        <p><strong>Manage medical by set, edit and Medication with mother</strong></p>
        <a href="medication_view.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow"><i class="fa fa-medkit" aria-hidden="true"> | Manage Medication </i></a>
      </div>
    </div>
<div class="container fade-in">
      <div style="text-align: center;">
        <img class="text-focus-in" src="images/user.png" alt="Image" width="60" height="60">
        <p><strong>Login Activity</strong></p>
        <a href="user_login.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Login Activity </i></a>
      </div>
    </div>
  </body>

</html>
<?php
  }
  else
  {
    $_SESSION['flash_message']="Please Login";
    header('location:index.php');
  }
?>
