<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Inportan to make website responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css file -->
    <title>View Profile</title>

<style>
    .v{
  color:   #fbeee6 ;
  background-color:  #1b2631;
    margin: auto;
  width: 100%;
  border: 2px solid red;
  border-radius: 12px;
  padding: 5px;
  text-align:center;
}
  
      .message{
    color: #a94442;
    border-radius: 5px;
    background-color:#f2dede;
    font-weight:bold;
    width:100%;
    font-size:20px;
        }
        .image{
}
</style>
</head>
<body>
<?php
   session_start();
  include "config.php";
  include "header2.php";   
   if(isset($_SESSION['user_account_type'])){
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
	?>
	</div></span></center>
    
        <div class="v">
            
                    <h4 class="yy">View Profile</h4>
                    <?php
                    $query1 = " select photo from user WHERE id=$id ";
		$result1 = mysqli_query($conn, $query1);
        $data = mysqli_fetch_assoc($result1); ?>
        			<a href="change_image.php"><img src="images/<?php echo $data['photo']; ?>" width="150" height="150" class="image"></a>
                    <p class="">UserName: <?php echo $row['user_account_name']; ?></p>
                    <p class="">ID: <?php echo $_SESSION['id']; ?></p>
                    <p class="">First Name: <?php echo $row['FName']; ?></p>
                    <p class="foo">Last Name: <?php echo $row['LName']; ?></p>
                    <p class="">Age: <?php echo $row['age']; ?></p>
                    <p class="">Marital Status: <?php echo $row['marital_status']; ?></p>
                    <p class="">Phone No: <?php echo $row['phone_no']; ?></p>
                    <p class="">Email: <?php echo $row['email']; ?></p>
                    <p class="">User Account Type: <?php echo $row['user_account_type']; ?></p>
                    <p class="">Gender: <?php echo $row['Gender']; ?></p>
                    <br>
                    <?php if($_SESSION['user_account_type'] == 'admin') {?> 
                    <a href="edit_profile_for_admin.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit My Profile</a><br><br>
                    <?php }else {?>
           <a href="edit_profile_for_user.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit My Profile</a><br><br>
            <?php }?> 
                 <a href="change_username.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Change Username</a><br><br>
                 <a href="change_password.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Change Password</a><br>
    </div>    
</body>
</html>
<?php

      }	
      else{
           $_SESSION['flash_message']="Please Login";
		header('location:index.php');
      }
?>