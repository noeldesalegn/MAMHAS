<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link to css file -->
    <title></title>
<style>
        .msg {color: #FF0001;}  
    </style>
    <!--css file-->
</head>
<body style="background-color:#ccccff;">
<?php
 include('config.php');
 session_start();
  include "header2.php";   

if($_POST)
{
    $FName = $_POST['FName'];
    $user_account_name = $_POST['user_account_name'];
    $Datee = $_POST['Datee'];
    $Timee = $_POST['Timee'];
    $mid= $_SESSION['mid'];
     $check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where user_account_name = '".$user_account_name."' and Datee= '".$Datee."'  ");
 
    date_default_timezone_set('Africa/Nairobi');
$today = date("Y-m-d h:i:s");
$datee =$Datee ;
//date("h:i \nA") 11:12 AM
if ($datee < $today) {
    $msg="The date is in the Past please select another date";
} 
else {
if (mysqli_num_rows($check) >0){
    $msg1="The Appointment is Already Exist Mother can have Appointment only once a day Please Set another date  " ."<br>";
}
else {
    
     // insert appointment details with the foreign key mrid from register table
         $sql = "INSERT INTO appointment_detail (Mother_Detail, user_account_name,Datee, Timee ,m_id,setted_by ,status) VALUES ('$FName','$user_account_name','$Datee', '$Timee','$mid','".$_SESSION['user_account_name']."', 'Active')";
        if(mysqli_query($conn, $sql))
        {
            // Redirect to manage.php after a delay of 3 seconds
            echo "<script>setTimeout(function(){window.location.href='View_appointment.php';},1);</script>";
                       echo "<script>alert('Appointment details added successfully!');</script>";

        }
        else
        {
            echo "Error adding appointment details: " . mysqli_error($conn);
        }
   

   
    }
 }
}
   

 $id = $_REQUEST['id'];
 $check=mysqli_query($conn,"select * from user where id='$id' ");
 $row=mysqli_fetch_array($check);
 ?> 


      <div class="container" >
        <form  method="post" >
            <h2>Set Appointment</h2> 
          
          <div class="form-group">
    <?php      $Datee = isset($_POST['Datee']) ? $_POST['Datee'] : '' ; ?>
    <?php      $Timee = isset($_POST['Timee']) ? $_POST['Timee'] : '' ; ?>
              <label  for="fname"><strong> Name:</strong></label>
                <input type="text"  class="form-control" name="FName" value="<?php echo $row['FName'];?>" required readonly >
              </div>
                    <div class="form-group">
                <label  for="datee"><strong> Username:</strong></label>
                  <input type="text"   class="form-control" name="user_account_name" value="<?php echo $row['user_account_name'];?>"  required readonly>
                </div>
           <div class="form-group">
                <label  for="datee"><strong> Date:</strong></label>
                  <input type="date"   class="form-control" name="Datee" value="<?php echo $Datee;?>"  required>
                                  <b><span class="msg"> <?php echo $msg; ?></span> </b>
                </div>
            
              <div class="form-group">
                <label for="timee"><strong> TIME:</strong></label>
                  <input type="time"  class="form-control" placeholder="Enter time" name="Timee" value="<?php echo $Timee ;?>"  required>
              </div>
                  <div class="form-group"><br>
                    <b><span class="msg"> <?php echo $msg1; ?></span> </b>
                <br><button type="submit" class="btn btn-primary" >set appointment</button>
                        <a href="manage_ap1.php" class="btn btn-warning">Cancel</a>
              </div>
            
          <?php  $_SESSION['mid']=$id; ?>
          </form>
        </div> 
          <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
</body>
</html>