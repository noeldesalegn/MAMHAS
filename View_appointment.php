<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
</style>
  </head>
  <body >
<?php
   session_start();
  include "config.php";
  if($_SESSION['user_account_type'] == 'mother') {
include ('header2.php');
  ?> 
<hr>
<?php
$check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where user_account_name = '".$_SESSION['user_account_name']."' ");
 if (mysqli_fetch_array($check)==0){ ?><center><div style="background-color: #a9cce3 ; width:100% ;">No Appointment</div></center><?php
}else {
    ?><center><div style="background-color: #a9cce3 ; width:100% ;">Your Appointment Detail With Physician</div></center>
<?php }?>
    <div class="table-responsive">
<table class="table table-striped">
<tr>
<th>Roll No</th>
<th>Appointment Id</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Setted Physician</th>
</tr>
<?php
$i=1;
$check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where user_account_name = '".$_SESSION['user_account_name']."' ");
while ($row=mysqli_fetch_array($check))  {
$id=$row['id'];

?>

<tr>
<td><?php echo $i++?></td>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['Datee'];?></td>
<td><?php echo $row['Timee'];?></td>
<td><?php echo $row['setted_by'];?></td>
</tr>
<?php } 
?>
</table>
</div>
</form>
<br>


<p align="cenre"> <a href="mother.php" class="btn btn-primary">Back</a> </p>
  </body>
</html>
<?php
}
elseif ($_SESSION['user_account_type'] == 'physician') {
    include ('header2.php');
?>

    <p align="right"><a href="manage_ap1.php" class="btn btn-primary">Set New Appointment</a></p>

<?php 
$for=mysqli_query($conn,"SELECT * FROM `appointment_detail` ");
$row=mysqli_fetch_array($for);
      date_default_timezone_set('Africa/Nairobi');
 $today = date("Y-m-d h:i:s");
$datee =$row['Datee'] ;

 $sql= mysqli_query($conn, "UPDATE appointment_detail SET status='Elapsed' where date(Datee) < curdate()"); 
 if($sql)
        {
            // Redirect to manage.php after a delay of 3 seconds
                     //  echo "<script>alert('Status Updated');</script>";

        }
        else {
            echo mysqli_error($conn);
        }
?>


<form method="post">
    <div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>Mother</th>
<th>Username</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Mother Id</th>
<th>Setted Time</th>
<th>Modified Date</th>
<th>Status</th>
<th colspans="2"><center>Operations</center></th>
</tr>
<?php
$i=1;
$check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where setted_by= '".$_SESSION['user_account_name']."' order by id asc");
if (mysqli_num_rows($check) == 0){
    echo"<h1>"."No Appointment Record" ."</h1>";
} else{
while ($row=mysqli_fetch_array($check))  {
$id=$row['id'];
$m_id=$row['m_id'];
?>
<tr>
<td><?php echo $i++;?> </td>
<td><?php echo $row['Mother_Detail'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><?php echo $row['Datee'];?></td>
<td><?php echo $row['Timee'];?></td>
<td><?php echo $row['m_id'];?></td>
<td><?php echo $row['setted_time'];?></td>
<td><?php echo $row['modified_on'];?></td>
<td ><?php echo $row['status'];?></td>
<td><?php  echo "<a  href='edit_app.php?id=$id&m_id=$m_id' class='btn btn-warning' >Edit</a>" ;?></td>
<td><a class="btn btn-danger" href="delete_app.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
</tr>
<?php } }?>
</table>
</div>
</form>
</div>
<br>


<p align="left"> <a href="physician.php" class="btn btn-primary">Back</a> </p>
  </body>
</html>
<?php
}
else
{
$_SESSION['flash_message']="Please Login";
		header('location:index.php');
}
?>
