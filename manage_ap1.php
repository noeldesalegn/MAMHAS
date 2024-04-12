<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <?php
include('config.php');
  include "header2.php";   
session_start();
?>
<form method="post">
<!--<p align="right"> <a href="add_user1.php" class="btn btn-success">Create Account</a> </p>-->
<hr>
    <div class="table-responsive">
<table  width="50%" class="table table-striped">
<tr>
<th>Roll No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mother ID</th>
<th>Age</th>
<th>Marital Status</th>
<th>Phone Number</th>
<th>Email</th>
<th>User Account Name</th>
<th colspan="2">Operation</th>
</tr>
<?php
$i=1;
$mrid = isset($_REQUEST['mrid']) ? $_REQUEST['mrid'] : '';
$check=mysqli_query($conn,"select * from user where user_account_type = 'mother'");
while ($row=mysqli_fetch_array($check)) {
$id=$row['id'];
?>
<tr>
<td><?php echo $i++?></td>
<td><?php echo $row['FName'];?></td>
<td><?php echo $row['LName'];?></td>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['marital_status'];?></td>
<td><?php echo $row['phone_no'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><a class="btn btn-warning" href="set_app.php?id=<?php echo $id ?>">Set an Appointment</a></td>
<!--<td><a class="btn btn-warning" href="manageinfo.php?id=<?php echo $id ?>">set appointment</a></td>-->
</tr>
<?php } ?>
</table>
</div>
</form>
<br>
<p align="cenre"> <a href="View_appointment.php" class="btn btn-primary">Back</a> </p>
  </body>
</html>
