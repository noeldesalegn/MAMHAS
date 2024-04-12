<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
         .message{
    color: graan;
    border-radius: 5px;
    background-color:#f2dede;
    font-weight:bold;
    width:100%;
    font-size:20px;
        }
</style>
  </head>
  <body>
    <?php
 include "config.php";
  session_start();
  include "header2.php";            
?>

<br>
<form method="post">
<center><div style="background-color: #a9cce3 ; width:100% ;">Available  Physician</div></center>
    <div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>Physian Id</th>
<th>Physian Name</th>
<th>User Name</th>
<th colspan="2">Action</th>
</tr>
<?php
$i=1;
$check=mysqli_query($conn,"select * from user where user_account_type='physician' ");
while ($row=mysqli_fetch_array($check)) {
$id=$row['id'];
$user_account_name=$row['user_account_name'];
?>
<tr>
<td><?php echo $i++?></td>
<td><?php echo$row['id'];?></td>
<td><?php echo $row['FName'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><?php  echo "<a  href='advice.php?id=$id&user_account_name=$user_account_name' class='btn btn-warning' >Contact</a>" ;?></td>
</tr>
<?php } ?>
</table>
<div>
</form>
<form method="post">
<center><div style="background-color: #a9cce3 ; width:100% ;">Available  Fp Worker</div></center>
    <div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>Fpworker Id</th>
<th>Fpworker Name</th>
<th>User Name</th>
<th colspan="2">Action</th>
</tr>
<?php
$i=1;
$check=mysqli_query($conn,"select * from user where user_account_type='fpworker' ");
while ($row=mysqli_fetch_array($check)) {
$id=$row['id'];
$user_account_name=$row['user_account_name'];
?>
<tr>
<td><?php echo $i++?></td>
<td><?php echo$row['id'];?></td>
<td><?php echo $row['FName'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><?php  echo "<a  href='advice.php?id=$id&user_account_name=$user_account_name' class='btn btn-warning' >Contact</a>" ;?></td>
</tr>
<?php } ?>
</table>
<div>
</form>

<p align="cenre"> <a href="index.php" class="btn btn-primary">Back</a> </p>
  </body>
</html>
