<?php
session_start();
include('config.php');
  if($_SESSION['user_account_type'] == 'mother') {

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Manage Appointment Info</title>
    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
    <link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <form method="post">
  <br>
<p align="centre">medication info</a> </p>
<hr>
<div class="table-responsive">
<center><div style="background-color: #a9cce3 ; width:100% ;">Your medication Detail </div></center>
<table  width="50%" class="table table-striped">
<tr>
<th>Disease</th>
<th>Allergies</th>
<th>Prescription</th>
<th>Setted By</th>
</tr>
<?php
$check=mysqli_query($conn,"select * from medication where user_account_name= '".$_SESSION['user_account_name']."' ");
while ($row=mysqli_fetch_array($check)) {
    $apid=$row['medication_id'];
?>
<tr>
    <td><?php echo $row['disease'];?></td>
    <td><?php echo $row['allergies'];?></td>
    <td><?php echo $row['prescription'];?></td>
    <td><?php echo $row['registered_by'];?></td>
</tr>
<?php } ?>
</table>
</div>
</form>
    </div>
    <p align="cenre"> <a href="mother.php" class="btn btn-primary btn-lg btn-block">Back</a> </p>

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
