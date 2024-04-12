 <?php
 session_start();
 include('config.php');
 include('header2.php');
 if ($_POST) {
    $Username=$_POST['username'];
    $sql = "SELECT * FROM `user` where user_account_name ='$Username' ";
    $query =  mysqli_query($conn, $sql);
 if(mysqli_num_rows($query)>0)
    {
            $errors="The Username Already Exist Please Try Another ";
    }
    else{
                    $Username=$_POST['username'];
          if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/',$Username)) {
        $errors= "Username shouldn't contain space and special characters";
    }

    // If there are no errors, proceed with database insertion
    else {
    $id = $_SESSION['id'];
    $user_account_name=$_POST['username'];
$sql2="UPDATE user SET user_account_name='$user_account_name' ,modified_on=now()  WHERE id=$id ";
 	$query2 = mysqli_query($conn,$sql2);

 if ($query2) {
         $_SESSION['user_account_name']=$_POST['username'];
         if ($_SESSION['user_account_type']=='admin'){
 echo "<script>setTimeout(function(){window.location.href='view_profile_info _for_admin.php';},1);</script>";
            echo "<script>alert('Your Username successfully Updated !');</script>"; }
            else {
                echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('Your Username successfully Updated !');</script>"; 
            }
            }
    }

 }
 }
 
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Username </title>
    <style>
        .errors {color: #FF0001;}  
         input {font-weight:bold;}

    </style>
  </head>
  <body style="background-color:#ccccff;">
  <?  $user_account_name = isset($_POST['username']) ? $_POST['username'] : $_SESSION['user_account_name'] ;?>

    <div class="container">
      <h2>Change Username</h2>
      <form method="post">
        <div class="form-group">
          <label for="username">New Username :</label>
          <input type="text" class="form-control" id="fname" name="username" placeholder="Enter New Username" required value="<?php echo $user_account_name ; ?>" minlength="5" >
                  <b><span class="errors"> <?php echo $errors; ?></span> </b>
        </div><br>
        <button type="submit" class="btn btn-primary" name="submit" >Change Username</button>
       <a href="view_profile.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> Cancel</i></a>
      </form>
      </div>
        <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
<? 
date_default_timezone_set('Africa/Nairobi');

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
  echo "Why aren't you asleep?  Are you programming?";
} ?>
  </body>
</html>