<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title></title>
    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
<!--css file-->
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
include('config.php');
session_start();
  include "header2.php";   
  if($_SESSION['user_account_type'] == 'physician') {

?>
<form method="post">
<!--<p align="right"> <a href="add_user1.php" class="btn btn-success">Create Account</a> </p>-->
<hr>
<div class="container">
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Roll No </th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Account Name</th>
                <th>Mother ID</th>

                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $mrid = isset($_REQUEST['mrid']) ? $_REQUEST['mrid'] : '';
            $check=mysqli_query($conn,"select * from user where user_account_type = 'mother'");
            while ($row=mysqli_fetch_array($check)) {
             $id=$row['id'];
            ?>
            <tr>
                <td><? echo $i++;?></td>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
                <td><?php echo $row['user_account_name'];?></td>
                <td><?php echo $row['id'];?></td>

                
                <td><a class="btn btn-warning" href="medication_setting.php?id=<?php echo $id ?>"><i class="fa fa-medkit" aria-hidden="true"> | Set a medication </i></a></td>
            </tr>
            <?php  }   ?>
        </tbody>
    </table>
</div>
</div>
<a href="medication_view.php" class="btn btn-primary "><strong><i class="fa fa-arrow-left" aria-hidden="true"> | Back </i> </strong></a>
</form>
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
