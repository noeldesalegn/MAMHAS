    <?php
 include "config.php";
  session_start();
  include "header2.php";            
  if($_SESSION['user_account_type'] == 'admin') {
?>
    <div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Message</th>
<th>Sent On</th>
</tr>
<?php
$check=mysqli_query($conn,"select * from feedback");
if (mysqli_num_rows($check) == 0){
    echo"<h1>"."No Feedback Record" ."</h1>";
} else {
$i=1;
$check=mysqli_query($conn,"select * from feedback");
while ($row=mysqli_fetch_array($check)) {
?>
<tr>
<td><?php echo $i++?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['Email'];?></td>
<td><?php echo $row['Phone_no'];?></td>
<td><?php echo $row['Message'];?></td>
<td><?php echo $row['Sent_date'];?></td>
</tr>
<?php } }?>
</table>
<div>
<?
  }
else{
       $_SESSION['flash_message']="Please Login !";
		header('location:index.php');
}
?>