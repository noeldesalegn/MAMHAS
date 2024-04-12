<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Inportan to make website responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css file -->
     <link rel="stylesheet" href="css/style2.css">
  <title>MAMHAS</title>
<link rel="icon" type="image/png" href="images/hospital (2).png" />

    <!--css file-->
    <link rel="stylesheet" href="css/style.css">
    <style>
      .message{
    color: #a94442;
    border-radius: 5px;
    background-color:#f2dede;
    font-weight:bold;
    width:100%;
    font-size:20px;
        }
    </style>
</head>


<?php

  include "config.php";
  session_start();
		$sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."'   ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
            
  if($row['user_account_type'] == 'fpworker' and $row['first_time']=='1') {
include "header2.php";
  ?>

 <body onLoad="aler('WELCOME DEAR FP WORKER !');" >
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

            <h2 class="text-center gg">MAMHAS Fp workers home page</h2>
            <?php 
if(isset($_SESSION['flash_message'])) { 
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
     } 
?> 
     <center> <span ><b><div class="message"> <?php echo $message; ?></b></div></span></center>
            
           <body>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/ga.png" alt="Image" width="60" height="60">
    <p ><strong>Give advice for pregnant moms</strong></p>
<a href="mother_list.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Give Advice</a>
  </div>
</div>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/cloud.png" alt="Image" width="60" height="60">
    <p ><strong>upload information for the mother</strong></p>
       <a href="post.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">Upload Information</a>
  </div>
</div>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/info.png" alt="Image" width="60" height="60">
    <p ><strong>See Information</strong></p>
       <a href="post1.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">View Information</a>


  </div>
</div>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/cloud.png" alt="Image" width="60" height="60">
    <p ><strong>Register New Mother </strong></p>
       <a href="add_mother.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">Register</a>


  </div>
</div>



</body>
</html>
</html>
<?php
	}
	else
	{
        $_SESSION['flash_message']="Please Login !";
		header('location:index.php');
	}
?>