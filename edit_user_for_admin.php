
    <?php
 session_start();
 include('config.php');
 include ('header2.php'); 
			$sql = " SELECT * FROM `user` where user_account_type= '".$_SESSION['user_account_type']."'  ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($_SESSION['user_account_type'] == 'admin') {
       $id = $_REQUEST['id'];
   $id = $_SESSION['UID'];

 if ($_POST) {
    $user_account_name=$_POST['user_account_name'];
    $sql = "SELECT * FROM `user` where user_account_name = '".$user_account_name."' ";
    $query =  mysqli_query($conn, $sql);
       if($_SESSION['Un']==$user_account_name)
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
        $errors[6]= "Username shouldn't contain space and special characters";
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Add the specific values for fname and lname
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;
    $id = $_SESSION['UID'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
date_default_timezone_set('Africa/Nairobi');
$sql1="UPDATE user SET FName='$FName', LName='$LName',  Gender='$Gender', age='$age', marital_status='$marital_status', phone_no='$phone_no', email='$email',  user_account_type='$user_account_type' ,user_account_name='$user_account_name',modified_on=now()  WHERE id=$id ";
 	$query1 = mysqli_query($conn,$sql1);


 if ($query1) {
 echo "<script>setTimeout(function(){window.location.href='detail.php';},1);</script>";
            echo "<script>alert('User Profile successfully Updated !');</script>"; }
else {
          $_SESSION['flash_message'] = "Not Updated ";
    header('location:edit_user_for_admin.php');
 }

   }
   }
   else{
       if(mysqli_num_rows($query)>0)
    {
       $errors[6]="Username Already Exist";
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
        $errors[3] = "Phone number should be 10 digits , only contain numbers and start with 07 or 09";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[4] = "Invalid email format";
    }

    if( !preg_match('/^[a-zA-Z][0-9a-zA-Z_]{5,15}[0-9a-zA-Z]$/', $user_account_name)) {
        $errors[6] = "userName should only contain letters, numbers, and underscore ";
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Add the specific values for fname and lname
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;
    $id = $_SESSION['UID'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_type=$_POST['user_account_type'];
    $user_account_name=$_POST['user_account_name'];
date_default_timezone_set('Africa/Nairobi');
$sql2="UPDATE user SET FName='$FName', LName='$LName',  Gender='$Gender', age='$age', marital_status='$marital_status', phone_no='$phone_no', email='$email',  user_account_type='$user_account_type' ,user_account_name='$user_account_name',modified_on=now() WHERE id=$id ";
 	$query2 = mysqli_query($conn,$sql2);

 if ($query2) {
 echo "<script>setTimeout(function(){window.location.href='detail.php';},1);</script>";
            echo "<script>alert('User Profile successfully Updated !');</script>"; 
            }

 
else {
          $_SESSION['flash_message'] = mysqli_error($conn);
    header('location:view_profile_info_for_user.php');
 }
    }

    }
   }
 }
  
 ?>
      <?php
  $id = $_GET['id'];
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
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .errors {color: #FF0001;}  
    </style>
    <title></title>
  </head>
  <body style="background-color:#ccccff;" >
     <center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
	?>
	</div></span></center>
 <br>
  <div class="container" >
 <form method="post" class="form-horizontal"  >
<?php  echo $id ; ?> <br>
<div class="form-group">
          <label for="fname">First Name : </label>
 <input type="text" class="form-control" required name="FName" value="<?php echo $FName;?>">
     <b><span class="errors"> <?php echo $errors[0]; ?></span> </b>

        </div>
         <div class="form-group">
          <label for="LName"> Last Name  : </label>
<input type="text" name="LName" class="form-control" required value="<?php echo $LName;?>">
    <b><span class="errors"> <?php echo $errors[1]; ?></span> </b>
    <b><span class="errors"> <?php echo $errors[7]; ?></span> </b>
        </div>
         <div class="form-group">
          <label for="LName"> Age: </label>
<input type="number" class="form-control"  name="age" required value="<?php echo $age;?>">
    <b><span class="errors"> <?php echo $errors[2]; ?></span> </b>
 </div>
<div class="form-group">
          <label for="LName"> Gender: </label>
<select name="Gender" required class="form-select" required>
                        <option  value="Male" <?php if($Gender=='Male'){?> selected <?}?> ><b>Male</b></option>
                        <option  value="Female" <?php if($Gender=='Female'){?>selected <?}?>>Female</option>
                        </select> 
</div>
                               <div class="form-group">
          <label for="LName"> marital status  :  </label>
<select name="marital_status" class="form-select"  required >
                        <option  value="Single" <?php if($marital_status=='Single'){?>selected <?}?> > <b> Single</b></option>
                        <option  value="Married" <?php if($marital_status=='Married'){?>selected <?}?>   >Married</option>
                        <option  value="Divorced" <?php if($marital_status=='Divorced'){?>selected <?}?>   >Divorced</option>
                        <option  value="Widowed"  <?php if($marital_status=='Widowed'){?>selected <?}?>   >Widowed</option>
                    </select>
</div>
                     <div class="form-group">
          <label for="LName">  phone no  :  </label>
<input type="tel" class="form-control" required name="phone_no" value="<?php echo $phone_no;?>"> 
    <b><span class="errors"> <?php echo $errors[3]; ?></span> </b>
</div>
   <div class="form-group">
          <label for="LName">   Email : </label>
 <input type="text" class="form-control" required  name="email" value="<?php echo $row['email'];?>"> 
     <b><span class="errors"> <?php echo $errors[4]; ?></span> </b>
</div>
   <div class="form-group">
          <label for="LName">  Account Type :  </label>
          <select class="form-select" required name="user_account_type">
                        <option value="admin" <?php if($user_account_type=='admin'){?>selected <?}?> >Admin</option>
                        <option value="mother" <?php if($user_account_type=='mother'){?>selected <?}?> >Mother</option>
                        <option value="fpworker" <?php if($user_account_type=='fpworker'){?>selected <?}?> >Fpworker</option>
                        <option value="physician" <?php if($user_account_type=='physician'){?>selected <?}?> >Physician</option>
 </select>
  </div>
     <div class="form-group">
          <label for="LName">   Username : </label>
<input type="text"  required name="user_account_name" class="form-control"  value="<?php echo $user_account_name;?>">
    <b><span class="errors"> <?php echo $errors[6]; ?></span> </b>
</div><br>
<input type="submit"  class="btn btn-primary" value="Update">
<a href="detail.php"  class="btn btn-warning">Cancel  </a>
 <?php $_SESSION['UID']=$id; ?>
  <?php $_SESSION['Un']=$row['user_account_name']; ?>

   </form>
</div>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
  </body>
</html>
<?php }
else {
	    $_SESSION['flash_message']="Please Login";
		header('location:index.php');
  }
        
?>