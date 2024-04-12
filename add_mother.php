  <?php 
include "config.php";
include "header2.php"; 
session_start();   
?>
  <?php 

            
  if($_SESSION['user_account_type'] == 'fpworker') {

?>
<?php
if($_POST)
{
    $Username=$_POST['user_account_name'];
    $sql = "SELECT * FROM `user` where user_account_name = '".$Username."' ";
    $query =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0)
   {
header('Location:register_fpworker.php');
$_SESSION['flash_message'] = "Username Already Exist";
   }

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
    } elseif (!preg_match('/^09|07[0-9]{8}$/' ,$phone_no)) {
        $errors[3] = "Phone number should be 10 digits , only contain numbers and start with 09 or 07";
        //preg_match("/^\d{10}$/"
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[4] = "Invalid email format";
    }

    if ($password != $pass2 ) {
        $errors[5] = "Entered password are not the same";
    }

   if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/', $user_account_name))  {
        $errors[6] = "userName can only contain letters, numbers, and underscore ";
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
    $hash =password_hash($password, PASSWORD_DEFAULT);
  //  $pass=password_hash($password, PASSWORD_DEFAULT);
$sql="INSERT INTO `user` (`FName`,`LName`,  `Gender`,`age`,`marital_status`, `phone_no`,`email`, `user_account_type`,`user_account_name`, `password` , `Registered_By` ,`photo` ) VALUES ('".$FName."','".$LName."','".$Gender."','".$age."', '".$marital_status."','".$phone_no."','".$email."','".$user_account_type."','".$user_account_name."','".$hash."','Fp_Worker', 'user.png', )";
 
	$query = mysqli_query($conn,$sql);
	if($query)
	{ 
        echo "<script>setTimeout(function(){window.location.href='fpworker.php';},1);</script>";
            echo "<script>alert('Mother Registered successfully!');</script>";
	}
	else
	{
        		header('Location:register_fp.php');
		$_SESSION['flash_message'] = "Mother not Successfully Added ";
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
    <!-- Inportan to make website responsive -->
      <link rel="stylesheet" href="main.js"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- link to css file -->
    <title>Register New Mother</title>
    <!--css file-->

<style>

    .errors {color: #FF0001;}  

.message{
 background-color:violet;
  color:red;
        }
        
  </style>
  
  </head>
  <body style="background-color:#ccccff;">
<center><h1> Register a Mother</h1></center>
<div class="container" style="background-color:#ccccff;" >
  <form class="form-horizontal" method="post"  >
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

	?>
	</div></span></center> 

      </div>
    
 
    <div class="form-group">
      <label  for="Fname">First Name:</label>
	  
        <input type="text" class="form-control"  id="FName" placeholder="Enter First name" name="FName" minlength="3" required value="<?php echo $FName ; ?>" >
        <b><span class="errors"> <?php echo $errors[0]; ?></span> </b>
      </div>
    
    <br>
    <div class="form-group">
      <label for="Lname">Last Name:</label>
	  
        <input type="text" class="form-control" id="LName" placeholder="Enter Last name" name="LName" minlength="3" required value="<?php echo $LName ; ?>" >
                <b> <span class="errors"> <?php echo $errors[1]; ?></span> </b>
                <b> <span class="errors"> <?php echo $errors[7]; ?></span> </b>
      </div>
      <br>
     <div class="form-group">
      <label  for="Username">User Name:</label>
	  
        <input type="text" class="form-control" id="Uname" placeholder="Enter User Name" name="user_account_name" minlength="4" required value="<?php echo $user_account_name ; ?>" >
        <b><span class="errors"> <?php echo $errors[6]; ?></span> </b>
    </div>
   <br>
	<div class="form-group">
      <label  for="email">Email:</label>
	  
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?php echo $email ; ?>" >
                 <b><span class="errors"> <?php echo $errors[4]; ?></span> </b>
                 <br>
    </div>
    	<div class="form-group">
              <label  for="Gender">Gender:</label> 
     <select name="Gender" class="form-select" id="Gender"  required>
  <option value="Female">Female</option>
</select>
    </div>
<br>
    <div class="form-group">
                <label  for="user_account_type">User Type:</label>
    <select name="user_account_type" class="form-select" required>
                        <option value="mother">Mother</option>
                        
                    </select>
    </div>
    <br>
 <div class="form-group">
                <label for="marital">marital Status:</label>
 <select name="marital_status" class="form-select" required  >
                        <option  value="Single" <?php if ($_POST['marital_status']=='Single'){?>selected <?php } ?>><b> Single</b></option>
                        <option  value="Married" <?php if ($_POST['marital_status']=='Married'){?>selected <?php } ?>>Married</option>
                        <option  value="Divorced" <?php if ($_POST['marital_status']=='Divorced'){?>selected <?php } ?>>Divorced</option>
                        <option  value="Widowed" <?php if ($_POST['marital_status']=='Widowed'){?>selected <?php } ?>>Widowed</option>
                    </select>

        </div>
   <br>
	 <div class="form-group">
      <label for="Phnumber">Phone Number:</label>
        <input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone number" name="phone_no" minlength="10" maxlength="10" required value="<?php echo $phone_no ; ?>" >
                 <b><span class="errors"> <?php echo $errors[3]; ?></span> </b>

      </div>
      <br>
     <div class="form-group">
      <label  for="Phnumber">Age:</label>
        <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" minlength="1" maxlength="3" required value="<?php echo $age; ?>" >
                 <b><span class="errors"> <?php echo $errors[2]; ?></span> </b>
    </div>
	<br>
          <div class="form-group">
      <label for="pwd">Password:</label>
        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password"  minlength="5" required value="<?php echo $password; ?>" >
    </div>
    <br>
         <div class="form-group">
      <label  for="pwd">Confirm Password:</label>
        <input type="text" class="form-control" id="pass2" placeholder="Enter password" name="pass2"  minlength="5" required value="<?php echo $pass2 ; ?>">
    <b><span class="errors"> <?php echo $errors[5]; ?></span> </b>
    </div>
    <br>
    <div class="form-group">        
       <center> <input type="submit" class="btn btn-primary" value="Register"></center>
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
