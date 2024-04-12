
     <?php
      session_start();
       if($_SESSION['user_account_type'] == 'admin') {
  include "config.php";
  include "header2.php"; 
 if ($_POST) {
    $user_account_name=$_POST['user_account_name'];
    $sql = "SELECT * FROM `user` where user_account_name = '".$user_account_name."' ";
    $query =  mysqli_query($conn, $sql);
       if($_SESSION['user_account_name']==$user_account_name)
   {
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
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

          if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/',$user_account_name)) {
        $errors[5]= "Username shouldn't contain space and special characters";
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Add the specific values for fname and lname
       
    $id = $_SESSION['id'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_name=$_POST['user_account_name'];

$sql1="UPDATE user SET FName='$FName', LName='$LName',  Gender='$Gender', age='$age', marital_status='$marital_status', phone_no='$phone_no', email='$email',user_account_name='$user_account_name' ,modified_on=now() WHERE id=$id ";
 	$query1 = mysqli_query($conn,$sql1);


 if ($query1) {
 echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('Profile successfully Updated !');</script>"; }
else {
          $_SESSION['flash_message'] = "Not Updated1 ";
    header('location:edit_profile_info_for_admin.php');
 }

   }
   }
   else{
       if(mysqli_num_rows($query)>0)
    {
             $errors[6]="Username $user_account_name Already Exist";
    }
    else{
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
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
        $errors[3] = "Phone number should be 10 digits , only contain numbers and Start with 07 or 09";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[4] = "Invalid email format";
    }

          if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/',$user_account_name)) {
        $errors[5]= "Username shouldn't contain space and special characters";
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Add the specific values for fname and lname
    
    $id = $_SESSION['id'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_name=$_POST['user_account_name'];

$sql2="UPDATE user SET FName='$FName', LName='$LName',  Gender='$Gender', age='$age', marital_status='$marital_status', phone_no='$phone_no', email='$email' ,user_account_name='$user_account_name'
, modified_on=now()  WHERE id=$id ";
 	$query2 = mysqli_query($conn,$sql2);

 if ($query2) {
 echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('Profile successfully Updated !');</script>"; 
            }

 
else {
          $_SESSION['flash_message'] = "Not Updated2 ";
    header('location:view_profile.php');
 }

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css file -->
    <title>Edit Profile</title>

    <!--css file-->
    <style>
          .errors {color: #FF0001;}  

    </style>
</head>
<body style="background-color:#ccccff;" >
<?php
            

         $id = $_SESSION['id'];
 $check=mysqli_query($conn,"select * from user where id='$id' ");
 $row=mysqli_fetch_array($check);

  ?>
           
	<?php
 $check=mysqli_query($conn,"select * from user where id='$id' ");
 $row=mysqli_fetch_array($check);
     $FName = isset($_POST['FName']) ? $_POST['FName'] : $row['FName'] ;
     $LName = isset($_POST['LName']) ? $_POST['LName'] : $row['LName'];
     $user_account_name = isset($_POST['user_account_name']) ? $_POST['user_account_name'] : $row['user_account_name'];
     $age= isset($_POST['age']) ? $_POST['age'] : $row['age'] ;
     $email= isset($_POST['email']) ? $_POST['email'] :$row['email'];
     $phone_no= isset($_POST['phone_no']) ? $_POST['phone_no'] :$row['phone_no'] ;
     $marital_status= isset($_POST['marital_status']) ? $_POST['marital_status'] :$row['marital_status'] ;
    $Gender= isset($_POST['Gender']) ? $_POST['Gender'] :$row['Gender'] ;
    $user_account_type= isset($_POST['user_account_type']) ? $_POST['user_account_type'] :$row['user_account_type'] ;
	?>
<div class="container">
<form method="post" class="form-horizontal"   >
     <div class="form-group">
          <label for="LName">Id :  </label>
                    Id :<input Type="text" value="<?php echo $row['id']; ?>" readonly class="form-control" > </input> </div>
                     <div class="form-group">
          <label for="LName">  First Name :  </label>
                   <input Type"text" value="<?php echo $FName; ?>" name="FName" class="form-control" ></input>
                  </div>
                       <b><span class="errors"> <?php echo $errors[0]; ?></span> <b>
                        <div class="form-group">
          <label for="LName">  Last Name:  </label>
                <input Type"text" value=" <?php echo $LName; ?>" name="LName" class="form-control" ></input> </div>
                        <b><span class="errors"> <?php echo $errors[1]; ?></span><b>
               <b><span class="errors"> <?php echo $errors[7]; ?></span> <b>
                   <div class="form-group">
          <label for="LName">  Age:  </label> 
          <input Type"number"  value=" <?php echo $age; ?> " name="age" maxlength="3" class="form-control" ></input> 
          </div>
                        <b><span class="errors"> <?php echo $errors[2]; ?></span> <b>
                         <div class="form-group">
          <label for="LName">  Gender :  </label>
          <select name="Gender" class="form-select"    required >
                        <option  value="Male" <?php if($Gender=='Male'){?> selected <?}?> ><b>Male</b></option>
                        <option  value="Female" <?php if($Gender=='Female'){?>selected <?}?>>Female</option>
</select></div>
 <div class="form-group">
          <label for="LName">Marital Status:  </label>
         <select name="marital_status"   class="form-select"  required >
                        <option  value="Single" <?php if($marital_status=='Single'){?>selected <?}?> ><b> Single</b></option>
                        <option  value="Married" <?php if($marital_status=='Married'){?>selected <?}?>   >Married</option>
                        <option  value="Divorced" <?php if($marital_status=='Divorced'){?>selected <?}?>   >Divorced</option>
                        <option  value="Widowed"  <?php if($marital_status=='Widowed'){?>selected <?}?>   >Widowed</option>
                    </select> </div>
                     <div class="form-group">
          <label for="LName">  Phone_no:  </label>
                    <input Type"tel" value="<?php echo $phone_no; ?>" name="phone_no"phone_no" maxlength="10" class="form-control" ></input>
                     </div>
                        <b><span class="errors"> <?php echo $errors[3]; ?></span> <b>
                         <div class="form-group">
          <label for="LName">Email :  </label>
                  <input Type"email" name="email" value="<?php echo $email; ?>" class="form-control" ></input>
                  </div>
                                          <b><span class="errors"> <?php echo $errors[4]; ?></span> <b>
                     <div class="form-group">
          <label for="LName">  Account Type :  </label>
                  <input name="user_account_type" Type"text" value="<?php echo $row['user_account_type']; ?>" readonly class="form-control" ></input>
                   </div>
                         <div class="form-group">
          <label for="LName">Username :  </label>
                   <input name="user_account_name" Type"text" value="<?php echo $user_account_name; ?>" class="form-control" ></input>
                    </div>
                         <b><span class="errors"> <?php echo $errors[5]; ?></span><b> <br>
                         <b><span class="errors"> <?php echo $errors[6]; ?></span><b> <br>

               <input Type="submit" class="btn btn-primary" value="Update"> 
               <a href="view_profile.php" class="btn btn-warning" >Cancel</a>
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
        $_SESSION['flash_message']="Please Login !";
	}
?>