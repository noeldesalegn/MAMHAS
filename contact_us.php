<? 
session_start();
include('conn.php');
if(isset($_SESSION['id'])){
include('header2.php');}


if($_POST){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone_no = $_POST['Phone_no'];
    $Message = $_POST['Message'];
          $errors = array();
        if (empty($Name)) {
        $errors[] = " Name is required";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $Name)) {
        $errors[0] = "Name should only contain letters";
    }
     

    if (empty($Email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[1] = "Invalid email format";
    }
       if (empty($Phone_no)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^09|07[0-9]{8}$/", $Phone_no)) {
        $errors[2] = "Phone number should be 10 digits , only contain numbers and start with 07 or 09";
    }
        if (empty($errors)) {
            date_default_timezone_set('Africa/Nairobi');
    $disc_str = addslashes($Message);
     $sql = "INSERT INTO feedback (Name, Email, Phone_no ,Message,Sent_date) VALUES ('$Name', '$Email', '$Phone_no','$disc_str',now() )";
        if(mysqli_query($conn, $sql))
        {
           echo "<script>alert('Feedback Sent successfully!');</script>";  
        }
        else{
                       echo "<script>alert('Error Occured!');</script>";  

        }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
  </script>

<style >

     .errors {color: #FF0001;}  

</style>
</head>
<?php    
   $Name = isset($_POST['Name']) ? $_POST['Name'] : '' ;
   $Email= isset($_POST['Email']) ? $_POST['Email'] : '' ;
   $Phone_no= isset($_POST['Phone_no']) ? $_POST['Phone_no'] : '' ; 
   $Message = isset($_POST['Message']) ? $_POST['Message'] : '' ;
                              ?>

<body style="background-color:#ccccff;">
      <div class="container" >
            <form method="post" >
                <h3>Drop Us a Message</h3>
                                        <div class="form-group">
                                <label  for="datee"><strong> Name:</strong></label>
                            <input type="text" name="Name" class="form-control" placeholder="Your Name *" minlength="3"  value="<?php echo $Name ;?>" required/>
                        </div>
                                         <b><span class="errors"> <?php echo $errors[0]; ?></span> </b><br>
                        <div class="form-group">
                                        <label  for="datee"><strong> Email:</strong></label>

                            <input type="email" name="Email" class="form-control" placeholder="Your Email *" value="<?php echo $Email ;?>" required />
                        </div>
                                         <b><span class="errors"> <?php echo $errors[1]; ?></span> </b><br>

                        <div class="form-group">
                                        <label  for="datee"><strong> Phone Number:</strong></label>

                    <input type="tel" name="Phone_no" class="form-control" placeholder="Your Phone Number *" value="<?php echo $Phone_no ;?>" minlength="10" maxlength="10" required />
                        </div>
                                        <b><span class="errors"> <?php echo $errors[2]; ?></span> </b><br>
                        <div class="form-group" >
                                            <label  for="datee"><strong> Message:</strong></label>
   <br> <textarea name="Message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" value="dfgfgfg" required></textarea><br>
                <button type="submit" class="btn btn-primary" >Send Message</button>
    <? if(isset($_SESSION['id'])) {?> <a href="index.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"><strong> | Cancel</strong></i></a><?} ?>

            </form>
</div>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
</body>
</html>