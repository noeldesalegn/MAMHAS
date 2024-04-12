  <?php 
include "config.php";
 include ('header2.php'); 
//include "admin_header.php"; 
session_start();   
		$sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."'  and password = '".$_SESSION['password']."'  ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($row['user_account_type'] == 'admin') {
  
    $errors = array();

    ?>
<?php
if($_POST)
{
    $Username=$_POST['user_account_name'];
    $sql = "SELECT * FROM `user` where user_account_name = '".$Username."' ";
    $query =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0)
   {
$errors[6]="Username Already Exist" ;  }

else {
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
    $password=$_POST['password'] ;
    $pass2=$_POST['pass2'] ;
      $errors = array();

    if (empty($FName)) {
        $errors[] = "First name is required";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $FName)) {
        $errors[0] = "First name should only contain letters";
    }

    if (empty($LName)) {
        $errors[] = "Last name is required";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $LName)) {
        $errors[1] = "Last name should only contain letters";
    }

if ($FName==$LName) {
        $errors[7] = "Firstname and Lastname can't identical";
    } 
    if (empty($age)) {
        $errors[] = "Age is required";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => 18, "max_range" => 60)))) {
        $errors[2] = "Age should be between 18 and 60";
    }

    if (empty($phone_no)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^09|07[0-9]{8}$/", $phone_no)) {
        $errors[3] = "Phone number should be 10 digits , only contain numbers and start with 07 or 09";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[4] = "Invalid email format";
    }

    if ($password != $pass2 ) {
        $errors[5] = "Entered password are not the same";
    }

    if( !preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/', $user_account_name)) {
        $errors[6] = "userName should only contain letters, numbers, and underscore ";
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Add the specific values for fname and lname
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;

	$FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
    $password=$_POST['password'] ;
    $hash=password_hash($password, PASSWORD_DEFAULT);
$sql="INSERT INTO `user` (`FName`,`LName`,  `Gender`,`age`,`marital_status`, `phone_no`,`email`, `user_account_type`,`user_account_name`, `password`, `Registered_by`,`photo` ) VALUES ('".$FName."','".$LName."','".$Gender."','".$age."', '".$marital_status."','".$phone_no."','".$email."','".$user_account_type."','".$user_account_name."','".$hash."','Admin' ,'user.png')";
 
	$query = mysqli_query($conn,$sql);
	if($query)
	{
        	 echo "<script>setTimeout(function(){window.location.href='detail.php';},1);</script>";
            echo "<script>alert('New User Registered successfully!');</script>";
	}
	else
	{
        		header('Location:add_user_for_admin.php');
		$_SESSION['flash_message'] = "New User not Successfully Added ";
}
 }
 else {
        foreach ($errors as $error) {
           // echo $error . "<br>";
        }
  
 
    }
  }
}
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- link to css file -->
    <title>Register New User</title>
    <!--css file-->

<style>
 input {font-weight:bold;}
    .errors {color: #FF0001;}  

  h2{
color:Green;
  }
  label{
color:black;
  }

.message{
 background-color:violet;
  color:red;
        }
  </style>
  </head>
  <body style="background-color:#ccccff;" >
<center><h1> Register New User</h1></center>
<div class="container">
  <form class="form-horizontal" method="post" >
  <div class="form-group">
<center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
        $FName = isset($_POST['FName']) ? $_POST['FName'] : '' ;
     $LName = isset($_POST['LName']) ? $_POST['LName'] : '' ;
     $user_account_name = isset($_POST['user_account_name']) ? $_POST['user_account_name'] : '' ;
     $age= isset($_POST['age']) ? $_POST['age'] : '' ;
     $email= isset($_POST['email']) ? $_POST['email'] : '' ;
     $phone_no= isset($_POST['phone_no']) ? $_POST['phone_no'] : '' ;
     $password= isset($_POST['password']) ? $_POST['password'] : '' ;
     $pass2= isset($_POST['pass2']) ? $_POST['pass2'] : '' ;
    $user_account_type= isset($_POST['user_account_type']) ? $_POST['passuser_account_type'] : '' ;
     $Gender= isset($_POST['Gender']) ? $_POST['Gender'] : '' ;
	?>
	</div></span></center> 

      </div>
    
 
    <div class="form-group">
      <label  for="Fname">First Name:</label>
	  
        <input type="text" class="form-control"  id="FName" placeholder="Enter First name" name="FName" minlength="5" required value="<?php echo $FName ; ?>" >
        <b><span class="errors"> <?php echo $errors[0]; ?></span> </b>
      </div>
    
    
    <div class="form-group">
      <label for="Lname">Last Name:</label>
	  
        <input type="text" class="form-control" id="LName" placeholder="Enter Last name" name="LName" minlength="5" required value="<?php echo $LName ; ?>" >
                <b> <span class="errors"> <?php echo $errors[1]; ?></span> </b>
                    <b><span class="errors"> <?php echo $errors[7]; ?></span> </b>
      </div>
     <div class="form-group">
      <label  for="Username">User Name:</label>
	  
        <input type="text" class="form-control" id="Uname" placeholder="Enter User Name" name="user_account_name" minlength="5" required value="<?php echo $user_account_name ; ?>" >
        <b><span class="errors"> <?php echo $errors[6]; ?></span> </b>
    </div>
   
	<div class="form-group">
      <label  for="email">Email:</label>
	  
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?php echo $email ; ?>" >
                 <b><span class="errors"> <?php echo $errors[4]; ?></span> </b>
    </div>
    	<div class="form-group">
              <label  for="Gender">Gender:</label> 
     <select name="Gender" class="form-select" id="Gender"  required>
  <option value="Male" <?php if ($_POST['Gender']=='Male'){?>selected <?php } ?>>Male</option>
    <option value="Female" <?php if ($_POST['Gender']=='Female'){?>selected <?php } ?>>Female</option>
</select>
    </div>


    <div class="form-group">
                <label  for="user_account_type">User Type:</label>
    <select name="user_account_type" class="form-select" required>
                        <option value="mother" <?php if ($_POST['user_account_type']=='mother'){?>selected <?php } ?>>Mother</option>
                         <option value="physician" <?php if ($_POST['user_account_type']=='physician'){?>selected <?php } ?>> Physician</option>
                        <option value="fpworker" <?php if ($_POST['user_account_type']=='fpworker'){?>selected <?php } ?>>Fpworker</option>

                    </select>
    </div>

 <div class="form-group">
                <label for="marital">marital Status:</label>
 <select name="marital_status" class="form-select" required  >
                        <option  value="Single" <?php if ($_POST['marital_status']=='Single'){?>selected <?php } ?>><b> Single</b></option>
                        <option  value="Married" <?php if ($_POST['marital_status']=='Married'){?>selected <?php } ?>>Married</option>
                        <option  value="Divorced" <?php if ($_POST['marital_status']=='Divorced'){?>selected <?php } ?>>Divorced</option>
                        <option  value="Widowed" <?php if ($_POST['marital_status']=='Widowed'){?>selected <?php } ?>>Widowed</option>
                    </select>

        </div>
   
	 <div class="form-group">
      <label for="Phnumber">Phone Number:</label>
        <input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone number" name="phone_no" required value="<?php echo $phone_no ; ?>" minlength="10" maxlength="10">
                 <b><span class="errors"> <?php echo $errors[3]; ?></span> </b>

      </div>
     <div class="form-group">
      <label  for="Phnumber">Age:</label>
        <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" required value="<?php echo $age; ?>" minlength="3" maxlength="3">
                 <b><span class="errors"> <?php echo $errors[2]; ?></span> </b>
    </div>
	
          <div class="form-group">
      <label for="pwd">Password:</label>
        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password"  minlength="5" required value="<?php echo $password; ?>" >
    </div>
         <div class="form-group">
      <label  for="pwd">Confirm Password:</label>
        <input type="text" class="form-control" id="pass2" placeholder="Confirm password" name="pass2"  minlength="5" required value="<?php echo $pass2 ; ?>">
    <b><span class="errors"> <?php echo $errors[5]; ?></span> </b>
    </div>
    <br>
    <div class="form-group">        
     <input type="submit" class="btn btn-primary" value="Register">
             <a href="admin.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> Cancel</i></a>
      </div>
  </form>
</div>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
</body>
</html>
<?php
	}
	else
	{
        		header('location:index.php');
             $_SESSION['flash_message'] = " Please Login ! ";
	}
?>
