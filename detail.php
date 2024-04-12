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
  if($_SESSION['user_account_type'] == 'admin') {
include "header2.php";
        ?><br>
<form class="form-horizontal" method="post" >

                  <label  for="user_account_type">Search User:</label>
    <input type="search" placeholder="Username or ID or Phone No"  name="search">
      <input type="submit" value="Search"> 
      </form> <br>
      </div>
<?php if ($_POST){
?>

      <? 
      $user_account_name = $_POST['search'];
    $check=mysqli_query($conn,"select * from user where  user_account_name  LIKE '%$user_account_name%' or id LIKE '%$user_account_name%' or phone_no LIKE '%$user_account_name%'");
if (mysqli_num_rows($check) == 0){
    echo"<h1>"."No Result Found" ."</h1>";
}
else {
while ($row=mysqli_fetch_array($check)) {
    $id=$row['id'];
?>
<form method="post"><br><br>
    <div class="table-responsive">
<table class="table table-striped">
<tr>
<th>User Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Marital Status</th>
<th>Phone Number</th>
<th>Email</th>
<th>User Account Type</th>
<th>User Account Name</th>
<th>Gender</th>
<th>Registered date</th>
<th>Registered By</th>
<th>Modified On</th>
<th>First Login </th>
<th colspan="2">Operations</th>
</tr>
<tr>
<td><?php echo$row['id'];?></td>
<td><?php echo $row['FName'];?></td>
<td><?php echo $row['LName'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['marital_status'];?></td>
<td><?php echo $row['phone_no'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['user_account_type'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><?php echo $row['Gender'];?></td>
<td><?php echo $row['Registered_date'];?></td>
<td><?php echo $row['Registered_By'];?></td>
<td><?php echo $row['modified_on'];?></td>
<td><?php echo $row['first_time'];?></td></tr>
<td><a class="btn btn-warning" href="edit_user_for_admin.php?id=<?php echo $id ?>">Edit</a></td>
<td><a class="btn btn-danger" href="delete_user.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure to delete user?')">Delete</a></td>
</tr>
<?php }}
}
?>
</table>
<div>
</form>
<br>






<form method="post"><br><br>
 
<p align="right"> <a href="add_user_for_admin.php" class="btn btn-success">Create New Account</a> </p>
<hr>
<center> <span  ><div class="message" style="background-color:Green;">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
	?>
	</div></span></center> 
    <div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>User Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Marital Status</th>
<th>Phone Number</th>
<th>Email</th>
<th>User Account Type</th>
<th>User Account Name</th>
<th>Gender</th>
<th>Registered date</th>
<th>Registered By</th>
<th>Modified On</th>
<th>First Login </th>
<th colspan="2">Operations</th>
</tr>
<?php
$i=1;
$check=mysqli_query($conn,"select * from user");
while ($row=mysqli_fetch_array($check)) {
$id=$row['id'];
?>
<tr>
<td><?php echo $i++?></td>
<td><?php echo$row['id'];?></td>
<td><?php echo $row['FName'];?></td>
<td><?php echo $row['LName'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['marital_status'];?></td>
<td><?php echo $row['phone_no'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['user_account_type'];?></td>
<td><?php echo $row['user_account_name'];?></td>
<td><?php echo $row['Gender'];?></td>
<td><?php echo $row['Registered_date'];?></td>
<td><?php echo $row['Registered_By'];?></td>
<td><?php echo $row['modified_on'];?></td>
<td><?php echo $row['first_time'];?></td>
<td><a class="btn btn-warning" href="edit_user_for_admin.php?id=<?php echo $id ?>">Edit</a></td>
<td><a class="btn btn-danger" href="delete_user.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure to delete user?')">Delete</a></td>
</tr>
<?php } ?>
</table>
<div>
</form>
<br>
<p align="cenre"> <a href="admin.php" class="btn btn-primary">Back</a> </p>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
  </body>
</html>
<?php
	}
	else
	{
        $_SESSION['flash_message']="Please Login !";
		header('location:index.php');
	}
?>