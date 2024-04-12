<?php
session_start();
include('config.php');
  include "header2.php";   
  if($_SESSION['user_account_type'] == 'physician') {

  $medication_id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM medication WHERE medication_id='$medication_id'");
  $row = mysqli_fetch_array($result);

if(isset($_POST['submit'])) {
  $disease = $_POST['disease'];
  $allergies = $_POST['allergies'];
  $prescription = $_POST['prescription'];
  $sql=mysqli_query($conn, "UPDATE medication SET disease='$disease', allergies='$allergies' , prescription='$prescription' 	modified_on=now() WHERE medication_id='$medication_id'");
  if($sql){
            echo "<script>alert('Medication details Updated successfully!');</script>";
            echo "<script>setTimeout(function(){window.location.href='medication_view.php';}, 1);</script>";
        } 
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>

    <title>Edit Medication</title>
  </head>
  <body style="background-color:#ccccff;">
    <div class="container">
      <h2>Edit Medication</h2>
      <form method="post">
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="fname" name="FName" value="<?php echo $row['FName']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="fname">Username:</label>
          <input type="text" class="form-control" id="fname" name="user_account_name" value="<?php echo $row['user_account_name']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="disease">disease:</label>
          <input type="text" class="form-control" id="disease" name="disease" value="<?php echo $row['disease']; ?>">
        </div>
        <div class="form-group">
          <label for="allergies">allergies:</label>
          <input type="text" class="form-control" id="allergies" name="allergies" value="<?php echo $row['allergies']; ?>">
        </div>
        <div class="form-group">
          <label for="prescription">prescription:</label>
          <input type="text" class="form-control" id="prescription" name="prescription" value="<?php echo $row['prescription']; ?>">
        </div><br>
        <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-wrench" aria-hidden="true"> | Update</i></button>
        <a href="medication_view.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> | Cancel</i></a>
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