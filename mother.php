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

 <style>
    </style>
    <!--css file-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#98B4D4;">
<?php
  include "config.php";
date_default_timezone_set('Africa/Nairobi');
  session_start();
		$sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."' ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($_SESSION['user_account_type'] == 'mother' and $row['first_time']=='1') {
      include "header2.php" ;
  ?>
  <body onLoad="aler('WELCOME DEAR MOTHER !');" >
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


           <div class="container">
                <div style="text-align: center;">
         <div style="text-align: center;">

</div>
</div>

  <div style="text-align: center;">
    <img class="text-focus-in" src="images/ga.png" alt="Image" width="60" height="60">
    <p class="food-detail"><strong>Get Advice From FP Worker Or Physician</strong></p>
<a href="physician_and_fpworker_list.php" class="btn btn-primary btn-block btn-long btn-animate btn-glow">Get Advice</a>
  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/info.png" alt="Image" width="60" height="60">
    <p class="food-detail"><strong>View informaion</strong></p>
    <a href="post1.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">View Informaion</a>
  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" src="images/medical.png" alt="Image" width="60" height="60">
    <p class="food-detail"><strong> View Appoinment</strong></p>
    <a href="View_appointment.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow">View Appointment</a>

  </div>
</div>
<br>
<div class="container">
  <div style="text-align: center;">
    <img class="text-focus-in" alt="medications" src="images/medications.png" alt="Image" width="60" height="60">
    <p class="food-detail"><strong>Attend My Medication</strong></p>
    <a href="medication_view_for_mother.php"class="btn btn-primary btn-block btn-long btn-animate btn-glow"><i class="fa fa-medkit" aria-hidden="true"> | Attend Now </i></a>

  </div>
  <br>

 
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

