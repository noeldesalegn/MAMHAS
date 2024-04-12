<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .errors {color: #FF0001;}  

    </style>
  </head>
  <body>
    <?php
 session_start();
 include('config.php');
 include "header2.php"; 
            
  if($_SESSION['user_account_type'] == 'admin') {
          $_SESSION['flash_message']="Please Login";
		header('location:index.php');
  }
        else {
             if ($_POST) {
    $id = $_SESSION['id'];
	$age=$_POST['age'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $Gender=$_POST['Gender'];
    $marital_status=$_POST['marital_status'];
          $errors = array();
     if (empty($age)) {
        $errors[] = "Age is required";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => 18, "max_range" => 60)))) {
        $errors[2] = "Age should be between 18 and 60";
    }

    if (empty($phone_no)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match('/^09|07[0-9]{8}$/' ,$phone_no)) {
        $errors[3] = "Phone number should be 10 digits , only contain numbers and start with 07 or 09";
        //preg_match("/^\d{10}$/"
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[4] = "Invalid email format";
    }
    if (empty($errors)) {
        // Add the specific values for fname and lname
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;

$sql1="UPDATE user SET  age='$age', phone_no='$phone_no', email='$email' ,marital_status='$marital_status' ,Gender='$Gender' , modified_on=now() WHERE id=$id ";
 	$query1 = mysqli_query($conn,$sql1);


 if ($query1) {
 echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('Your Profile successfully Updated !');</script>"; }
else {
          $_SESSION['flash_message'] =  mysqli_error($conn); 
    header('location:view_profile_info_for_user.php');
 }

    }

    }
  $id = $_SESSION['id'];
 $check=mysqli_query($conn,"select * from user where id='$id' ");
 $row=mysqli_fetch_array($check);
 ?>
     <center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
	 unset($_SESSION['flash_message']);
     $age= isset($_POST['age']) ? $_POST['age'] : $row['age'] ;
     $email= isset($_POST['email']) ? $_POST['email'] : $row['email'] ;
          $Gender= isset($_POST['Gender']) ? $_POST['Gender'] : $row['Gender'] ;
               $marital_status= isset($_POST['marital_status']) ? $_POST['marital_status'] : $row['marital_status'] ;
     $phone_no= isset($_POST['phone_no']) ? $_POST['phone_no'] : $row['phone_no'] ;
	?>
	</div></span></center>
 <br>
 <body style="background-color:#ccccff;">
 <div class="container" >
 <form method="post" class="form-horizontal" enctype="multipart/form-data">
<?php  echo $id ; ?> <br>
<div class="form-group">
      <label  for="Fname">First Name:</label>
<input type="text" class="form-control"   name="FName" value="<?php echo $row['FName'];?>" readonly>
 </div>
  <div class="form-group">
      <label for="Lname">Last Name:</label>
<input type="text" class="form-control"   name="LName" value="<?php echo $row['LName'];?>" readonly>
 </div>
  <div class="form-group">
      <label for="Lname">Age:</label>
<input type="number" class="form-control" name="age" value="<?php echo $age ; ?>" maxlength="3" >
 <b><span class="errors"> <?php echo $errors[2]; ?></span> </b>
 </div>
<?php if($row['user_account_type']=='mother') {?>
<div class="form-group">
      <label for="Gender">Gender:</label>
<input type="text" class="form-control"  name="Gender" value="<?php echo $Gender;?>" readonly></div>
                        <?php

}
else {?>  <div class="form-group">
      <label for="Gender">Gender:</label>
 <select name="Gender"  class="form-select"   required >
                        <option  value="Male" <?php if($Gender=='Male'){?> selected <?}?>  ><b>Male</b></option>
                        <option  value="Female" <?php if($Gender=='Female'){?>selected <?}?> >Female</option>
</select></div>
  <?} ?>
  <?php if($row['user_account_type']=='mother') { ?>
     <div class="form-group">
      <label  for="marital_status"> Marital Status:</label>
      <input type="text" name="marital_status" class="form-control" value="<?php echo $row['marital_status'];?>" readonly>
      </div>
      <?php }
      else {?>
<div class="form-group">
      <label  for="Username"> Marital Status:</label>
  <select name="marital_status" class="form-select" required >
                        <option  value="Single" <?php if($marital_status=='Single'){?>selected <?}?> ><b> Single</b></option>
                        <option  value="Married" <?php if($marital_status=='Married'){?>selected <?}?>   >Married</option>
                        <option  value="Divorced" <?php if($marital_status=='Divorced'){?>selected <?}?>   >Divorced</option>
                        <option  value="Widowed"  <?php if($marital_status=='Widowed'){?>selected <?}?>   >Widowed</option>
                    </select> </div>
<?php } ?>
<div class="form-group">
      <label  for="Username"> Phone Number:</label>
 <input type="tel" class="form-control"   name="phone_no"value="<?php echo $phone_no ; ?>" maxlength="10" ></div>
    <b><span class="errors"> <?php echo $errors[3]; ?></span> </b>
<div class="form-group">
      <label  for="Username"> Email:</label>
<input type="text" class="form-control"   name="email" value="<?php echo $email ; ?>" ></div>
 <b><span class="errors"> <?php echo $errors[4]; ?></span> </b>
 <?php 
 if($_SESSION['user_account_type']=='mother'){ ?><div class="form-group">
      <label  for="Username">Account Type:</label>
<select name="user_account_type" class="form-control "   value="<?php echo $row['user_account_type'];?>" readonly>
                        <option value="mother">Mother</option>
                        </select></div>
                        <?php
 }
 ?>
 <?php 
 if($_SESSION['user_account_type']=='physician'){  ?>
 <div class="form-group">
      <label  for="Username"> Account Type:</label>
<select name="user_account_type" class="form-select"   value="<?php echo $row['user_account_type'];?>" readonly>
                        <option value="physician">Physician</option>
                        </select></div>
                        <?
 }
 ?>
  <?php 
 if($_SESSION['user_account_type']=='fpworker'){ ?>
   <div class="form-group">
      <label  for="Username"> Account Type:</label>
<select name="user_account_type" class="form-select"   value="<?php echo $row['user_account_type'];?>" readonly>
                        <option value="fpworker">Fp Worker</option>
                        </select></div>
                        <?php
 }
 ?>
     <div class="form-group">
      <label  for="Username">User Name:</label>
	  
        <input type="text" class="form-control" id="Uname"  name="user_account_name" minlength="4" required value="<?php echo $row['user_account_name']?>" readonly ></div><br>

            <button type="submit" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-wrench" aria-hidden="true"> | Update</i></button>
            <a href="view_profile.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> Cancel</i></a>
   </form>

</div>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
  </body>
</html>
<?php
	}
?>
