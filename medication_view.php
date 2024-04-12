<?php
session_start();
include('config.php');
  include "header2.php";   
  if($_SESSION['user_account_type'] == 'physician') {

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Medication</title>

</script>

    <style>
        .table-responsive {
            overflow-x: auto;
        }
         .center-text {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
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
<p class="center-text" >Medication info</a> </p>
<hr>
    <p align="right"><a href="medication.php" class="btn btn-primary">Set New Medication</a></p>

<?php
$i=1;
$check=mysqli_query($conn,"select * from medication where registered_by= '".$_SESSION['user_account_name']."' ");

if (mysqli_num_rows($check) == 0){
    echo"<h1>"."No Medication Record" ."</h1>";
}
else {
while ($row=mysqli_fetch_array($check)) {
    $apid=$row['medication_id'];
?>
<div class="table-responsive">
<table  class="table table-striped">
<tr>
<th>Roll No</th>
<th>First Name</th>
<th>Username</th>
<th>Mother Id</th>
<th>Disease</th>
<th>Allergies</th>
<th>Prescription</th>
<th colspan="2">Operation</th>
</tr>
<tr>
<td><? echo $i++?></td>
    <td><?php echo $row['FName'];?></td>
    <td><?php echo $row['user_account_name'];?></td>
    <td><?php echo $row['m_id'];?></td>
    <td><?php echo $row['disease'];?></td>
    <td><?php echo $row['allergies'];?></td>
    <td><?php echo $row['prescription'];?></td>
    <td><a class="btn btn-warning" href="medication_edit.php?id=<?php echo $apid ?>">Edit</a></td>
    <td><a href="medication_delete.php?id=<?php echo $apid ?>"  class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</a></td>
</tr>
<?php } $_SESSION['mid']=$apid;
}?>
</table>
</div>
</form>
    </div>
    <p align="cenre"> <a href="physician.php" class="btn btn-primary btn-lg btn-block">Back</a> </p>

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
