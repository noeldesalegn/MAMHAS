 <?php
 session_start();
 include('config.php');
  include('header2.php');
 if ($_POST) {
  $id = $_SESSION['id'];
  $cp=$_POST['cp'];
  $np=$_POST['np'];
  $cnp=$_POST['cnp'];
        $errors = array();
  $hash =password_hash($np, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."' ";
    $query =  mysqli_query($conn, $sql);
    		if (mysqli_num_rows($query) == 1){
                       $row=mysqli_fetch_array($query);
 if(password_verify($cp, $row['password'])){
                    if ($cp==$np and $cp==$cnp){
    $errors[3]="You Used Old Password , Enter New Password";
} 

    else {
 if ($np != $cnp) {
        $errors[1]= "New password and Confirm New password are not the same";
    } 
else {
     $sql2="UPDATE user SET password='$hash' ,modified_on=now() WHERE id=$id ";
         $query2 =  mysqli_query($conn, $sql2);
         if($query2){
             if($_SESSION['user_account_type']==admin){
                 echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
             }
             else {
       echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
         }
         }
}
 }
 }

else {  $errors['2']='Entered Password is Incorrect ';
        $_POST['np']='' ;
        $_POST['cnp'] ='' ;
    }
 }
}
 
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .errors {color: #FF0001;}  
        .error{color:green;}
    </style>
  </head>
  <body style="background-color:#ccccff;" >
    <div class="container">
      <h2>Change Password</h2>
        <center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
    $cp= isset($_POST['cp']) ? $_POST['cp'] : '' ;
    $np= isset($_POST['np']) ? $_POST['np'] : '' ;
    $cnp= isset($_POST['cnp']) ? $_POST['cnp'] : '' ;

	?>
	</div></span></center>
      <form method="post">
        <div class="form-group">
          <label for="fname">Current Password:</label>
          <input type="text" class="form-control" id="fname" name="cp" placeholder="Enter Current Password" required value="<?php echo $cp; ?>" >
         <b><span class="errors"> <?php echo $errors[2]; ?></span>
        </div><br>
        <div class="form-group">
          <label for="datee">New Password:</label>
          <input type="text" class="form-control" placeholder="Enter New Password" id="datee" name="np" required value="<?php echo $np; ?>"  >
        </div>
<b><span class="errors"> <?php echo $errors[3];?></span><br>
        <div class="form-group">
          <label for="timee">Confirm New Password:</label>
          <input type="text" class="form-control" id="timee" placeholder="Confirm New Password" name="cnp" required value="<?php echo $cnp; ?>"  >
                  <b><span class="errors"> <?php echo $errors[1]; ?></span> </b><br>
        </div>
        <button type="submit" class="btn btn-primary" >Change Password</button>
         <a href="view_profile.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> Cancel</i></a>
      </form>
    </div>
      <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
  </body>
</html>