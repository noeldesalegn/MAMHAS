
     <?php
 session_start();
 include('config.php');  
 if ($_POST) {
    $Username=$_POST['user_account_name'];
    $sql = "SELECT * FROM `user` where user_account_name = '".$Username."' ";
    $query =  mysqli_query($conn, $sql);
       if($_SESSION['user_account_name']==$Username)
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
    } elseif (!filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => 12, "max_range" => 60)))) {
        $errors[2] = "Age should be between 12 and 60";
    }

    if (empty($phone_no)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^\d{10}$/", $phone_no)) {
        $errors[3] = "Phone number should be 10 digits and should only contain number";
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
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;
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
    } elseif (!filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => 12, "max_range" => 60)))) {
        $errors[2] = "Age should be between 12 and 60";
    }

    if (empty($phone_no)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^\d{10}$/", $phone_no)) {
        $errors[3] = "Phone number should be 10 digits and should only contain number";
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
        $FName = "Text " . $FName;
        $LName = "Text " . $LName;
    $id = $_SESSION['id'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
	$age=$_POST['age'];
    $marital_status=$_POST['marital_status'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $user_account_name=$_POST['user_account_name'];

$sql2="UPDATE user SET FName='$FName', LName='$LName',  Gender='$Gender', age='$age', marital_status='$marital_status', phone_no='$phone_no', email='$email' ,user_account_name='$user_account_name', modified_on='now()' WHERE id=$id ";
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
 
 else {
    header('location:index.php');
 }

 ?>

