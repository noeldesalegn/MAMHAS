<?php
session_start();
include('config.php');
include('header2.php');
 if($_SESSION['user_account_type'] == 'physician') {
     if ($_POST) {
    $FName = $_POST['FName'];
    $user_account_name = $_POST['user_account_name'];
    $disease = $_POST['disease'];
    $allergies = $_POST['allergies'];
    $prescription = $_POST['prescription'];
    $m_id =$_SESSION['mo_id'];
    $registered_by=$_SESSION['user_account_name'];

        $sql = "INSERT INTO medication (FName, user_account_name,  disease, allergies, prescription,m_id ,registered_by) VALUES ('$FName', '$user_account_name', '$disease', '$allergies', '$prescription','$m_id','$registered_by')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Medication details added successfully!');</script>";
            echo "<script>setTimeout(function(){window.location.href='medication_view.php';}, 1);</script>";
        } else {
            echo "Error adding medication details: " . mysqli_error($conn);
        }
   
    
}


$id = $_REQUEST['id'];
$check=mysqli_query($conn,"select * from user where id='$id' ");
$row=mysqli_fetch_array($check);
$_SESSION['mo_id']=$id;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

      .container {
      margin-top: 50px;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
        margin-bottom: 20px;
      }
      .form-group {
        margin-bottom: 20px;
      }
      label {
        font-weight: bold;
      }
      .btn-primary {
        margin-right: 10px;
      }
      .btn-default {
        color: #333;
      }
    </style>
    <title>set Medication</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body style="background-color:#ccccff;">
    <div class="container">
      <h2>Set Medication</h2>
      <form method="post" >
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="fname" name="FName" value="<?php echo $row['FName'];?>" required readonly >
        </div>
         <div class="form-group">
          <label for="fname">Username:</label>
          <input type="text" class="form-control" id="fname" name="user_account_name" value="<?php echo $row['user_account_name'];?>" required readonly>
        </div>
        <div class="form-group">
          <label for="disease">Disease:</label>
          <input type="text" class="form-control" id="disease" name="disease" required>
        </div>
        <div class="form-group">
          <label for="allergies">Allergies:</label>
          <input type="text" class="form-control" id="allergies" name="allergies" required>
        </div>
        <div class="form-group">
          <label for="prescription">Prescription:</label>
          <input type="text" class="form-control" id="prescription" name="prescription" required>
        </div>
        <div class="form-group">
          <label for="mrid">Mother ID:</label>
          <input readonly type="number" class="form-control" id="mrid" name="mrid" value="<?php echo $id ;?>">
        </div><br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit" >Save</button>
          <a href="medication.php" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>
      <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
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
