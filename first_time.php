<?php
session_start();
include('config.php');
  $query3= mysqli_query($conn, "select * from user where user_account_name  = '".$_SESSION['user_account_name']."'  ");
    $row3 = mysqli_fetch_array($query3);
          if ($row3['first_time'] == '0') {
if ($_POST) {
  $id = $_SESSION['id'];
  $cp = $_POST['cp'];
  $np = $_POST['np'];
  $cnp = $_POST['cnp'];
  $errors = array();
    $hash = password_hash($np, PASSWORD_DEFAULT);
  $sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."' ";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) == 1) {
    $row = mysqli_fetch_array($query);
    if (password_verify($cp, $row['password'])) {
                            if ($cp==$np and $cp==$cnp){
    $errors[3]="You Used Old Password , Enter New Password";
} 
    else {
      if ($np != $cnp) {
        $errors[1] = "New password and Confirm New password are not the same";
      } else {
        $sql2 = "UPDATE user SET password='$hash' ,modified_on=now() WHERE id=$id ";
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {
          $query = mysqli_query($conn, "UPDATE `user` SET `first_time` = '1' WHERE user_account_name = '".$_SESSION['user_account_name']."'  ");
          $query1 = mysqli_query($conn, "select * from user where user_account_name  = '".$_SESSION['user_account_name']."' ");
          $row = mysqli_fetch_array($query1);
          $_SESSION['id'] = $row['id'];
          $_SESSION['FName'] = $row['FName'];
          $_SESSION['LName'] = $row['LName'];
          $_SESSION['age'] = $row['age'];
          $_SESSION['Gender'] = $row['Gender'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['phone_no'] = $row['phone_no'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['marital_status'] = $row['marital_status'];
          $_SESSION['user_account_name'] = $row['user_account_name'];
          $_SESSION['user_account_type'] = $row['user_account_type'];

          if ($row['user_account_type'] == 'admin') {
            echo "<script>setTimeout(function(){window.location.href='admin.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
            header('Location:'); // redirect to admin dashboard for admin users
          } elseif ($row['user_account_type'] == 'physician') {
            echo "<script>setTimeout(function(){window.location.href='physician.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
          } elseif ($row['user_account_type'] == 'fpworker') {
            echo "<script>setTimeout(function(){window.location.href='fpworker.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
          } elseif ($row['user_account_type'] == 'mother') {
            echo "<script>setTimeout(function(){window.location.href='mother.php';},1);</script>";
            echo "<script>alert('The Password Successfully Changed!');</script>";
          }
        }
      }
    }
    } else {
      $errors['2'] = 'Entered Password is Incorrect ';
      $_POST['np'] = '';
      $_POST['cnp'] = '';
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Change Password</title>

   <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .errors {
      color: #FF0001;
    }

    .error {
      color: green;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>

<body style="background-color:#ccccff;">
  <div class="container">
    <h1>Change Password to Proceed <?php echo $_SESSION['user_account_name'];?></h1>
    <center>
      <span class="message">
        <div class="message">
          <?php
          if (isset($_SESSION['flash_message'])) {
            echo $_SESSION['flash_message'];
          }
          unset($_SESSION['flash_message']);
          $cp = isset($_POST['cp']) ? $_POST['cp'] : '';
          $np = isset($_POST['np']) ? $_POST['np'] : '';
          $cnp = isset($_POST['cnp']) ? $_POST['cnp'] : '';
          ?>
        </div>
      </span>
    </center>
    <form method="post">
      <div class="form-group">
        <label for="fname">Current Password:</label>
        <input type="text" class="form-control" id="fname" name="cp" placeholder="Enter Current Password" required value="<?php echo $cp; ?>">
        <b><span class="errors"><?php echo $errors[2]; ?></span>
      </div><br>
      <div class="form-group">
        <label for="datee">New Password:</label>
        <input type="text" class="form-control" placeholder="Enter New Password" id="datee" name="np" required value="<?php echo $np; ?>">
      </div>
 <b><span class="errors"><?php echo $errors[3];?></span><b><br>
      <div class="form-group">
        <label for="timee">Confirm New Password:</label>
        <input type="text" class="form-control" id="timee" placeholder="Confirm New Password" name="cnp" required value="<?php echo $cnp; ?>">
        <b><span class="errors"><?php echo $errors[1]; ?></span> </b>
      </div><br>
      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle" aria-hidden="true"><strong> | Change Password</i></strong></button>
      <a href="index.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"><strong> | Cancel</strong></i></a>
    </form>
  </div>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <br><br>
  <div class="container py-4">
      <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>why do we Change the Password the first Time we Login? 🤔</h2>
          <p>Forcing users to select their own password at initial logon, (the first time they authenticate), ensures that NOBODY else knows the password for the account once it has been changed <br>
         <div  class="text-white fw-bold"> <strong>So change it or you won't login!🙂</strong></div></p>
        </div>
      </div>
  </div>
</body>

</html>
<?php }
else
{
		header('location:index.php');
	}
    ?>