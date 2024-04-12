<?php
   session_start();
  include "config.php";
  include "header2.php";       
  if($_SESSION['user_account_type'] == 'physician') {

  ?><?php
 $id=$_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM appointment_detail WHERE id='$id'");
 $row = mysqli_fetch_array($result);

if(isset($_POST['submit'])) {
  $FName = $_POST['FName'];
  $user_account_name = $_POST['user_account_name'];
  $Datee = $_POST['Datee'];
  $Timee = $_POST['Timee'];
       $check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where user_account_name = '".$user_account_name."' and Datee= '".$Datee."' ");
     date_default_timezone_set('Africa/Nairobi');
$today = date("Y-m-d h:i");
$datee =$Datee ;
if ($datee < $today) {
    $msg="The date is in the Past Please Select another day";
}
else
{
if (mysqli_num_rows($check) >0){
                $msg1="The Appointment is Already Exist Mother can have Appointment only once a day Please Set another date  " ."<br>";
    }
    else {
        
 
if($hour > 16 && $hour <= 23) {
        $msg1=" The time is night Please Set Day " ."<br>";

   
} else {
         // insert appointment details with the foreign key mrid from register table
        $sql= mysqli_query($conn, "UPDATE appointment_detail SET Mother_Detail='$FName',user_account_name='$user_account_name', Datee='$Datee', Timee='$Timee',modified_on=now() WHERE id='$id'"); 
        if($sql)
        {
            // Redirect to manage.php after a delay of 3 seconds
            echo "<script>setTimeout(function(){window.location.href='View_appointment.php';},1);</script>";
                       echo "<script>alert('Appointment details Updated successfully!');</script>";

        }
        else
        {
            echo "Error adding appointment details: " . mysqli_error($conn);
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
    <title>Edit Appointment</title>
    <style>
        .msg {color: #FF0001;}  
    </style>
  </head>
  <body style="background-color:#ccccff;">
    <?php      $Datee = isset($_POST['Datee']) ? $_POST['Datee'] : $row['Datee'] ; ?>
    <?php      $Timee = isset($_POST['Timee']) ? $_POST['Timee'] : $row['Timee'] ; ?>
        <h2>Edit Appointment</h2>
        
    <div class="container"  >
      <form method="post">
        <div class="form-group">
          <label for="fname">Mother Name:</label>
          <input type="text" class="form-control" id="fname" name="FName" value="<?php echo $row['Mother_Detail']; ?>" readonly >
        </div>
        <div class="form-group">
          <label for="fname">Mother Name:</label>
          <input type="text" class="form-control" id="fname" name="user_account_name" value="<?php echo $row['user_account_name']; ?>" readonly >
        </div>
        <div class="form-group">
          <label for="fname">Mother ID:</label>
          <input type="text" class="form-control" id="fname" name="m_id" value="<?php echo $row['m_id']; ?>" readonly >
        </div>
        <div class="form-group">
          <label for="datee">Date:</label>
          <input type="date" class="form-control" id="datee" name="Datee" value="<?php echo $Datee ; ?>">
                  <b><span class="msg"> <?php echo $msg; ?></span> </b>
        </div>
        <div class="form-group">
          <label for="timee">Time:</label>
          <input type="time" class="form-control" id="timee" name="Timee" value="<?php echo $Timee ; ?>">
        </div><br>
                          <b><span class="msg"> <?php echo $msg1; ?></span> </b>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        <a href="View_appointment.php" class="btn btn-warning">Cancel</a>
      </form>
    </div>
      <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
  </body>
</html>
<?php
      }	
      else{
           $_SESSION['flash_message']="Please Login";
		header('location:index.php');
      }
?>