<?php
session_start();
?>

<!doctype html>
<html lang="en">
 <title>MAMHAS</title>
<link rel="icon" type="image/png" href="images/hospital (2).png" />
<head>
  <meta charset="utf-8" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <style>
    h2 {
      color: black;
    }

    label {
      color: #566573;
    }

    .container {
      background-color: red;
      width: 100%;
      padding: 10px;
    }

    .btn-primary {
      background-color: #4CAF50;
      width: 100%;
    }

    .message {
      color: #a94442;
      border-radius: 5px;
      background-color: #f2dede;
      font-weight: bold;
      width: 100%;
      font-size: 20px;
      position: relative;
      padding-right: 35px;
    }

    .close {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      font-weight: bold;
      color: #a94442;
      cursor: pointer;
    }

    .close:hover {
      color: #843534;
    }

    a:hover {
      color: #50546d;
      background-color: #ffffff;
    }
    
  </style>
</head>

<?php
include "config.php";
include "header3.php";

if (isset($_SESSION['id'])) {
  if ($_SESSION['user_account_type'] == 'admin') {
    header('Location:admin.php');
  } elseif ($_SESSION['user_account_type'] == 'physician') {
    header('Location:physician.php');
  } elseif ($_SESSION['user_account_type'] == 'fpworker') {
    header('Location:fpworker.php');
  } elseif ($_SESSION['user_account_type'] == 'mother') {
    header('Location:mother.php');
  }
}

if ($_POST) {
  $Username = $_POST['Username'];
  $password = $_POST['password'];
  $query = mysqli_query($conn, "SELECT * FROM user WHERE user_account_name = '$Username'");
  
  if (mysqli_num_rows($query) == 0) {
    $_SESSION['flash_message'] = "Login Failed. User not Found!";
  } else {
    $row = mysqli_fetch_array($query);
    if (password_verify($password, $row['password'])) {
      if ($row['first_time'] == '1') {
        // Fetch user data from $query1
        $query1 = mysqli_query($conn, "SELECT * FROM user WHERE user_account_name = '$Username'");
        $row1 = mysqli_fetch_array($query1);

        // Store user data in session variables
        $_SESSION['id'] = $row1['id'];
        $_SESSION['FName'] = $row1['FName'];
        $_SESSION['LName'] = $row1['LName'];
        $_SESSION['age'] = $row1['age'];
        $_SESSION['Gender'] = $row1['Gender'];
        $_SESSION['email'] = $row1['email'];
        $_SESSION['phone_no'] = $row1['phone_no'];
        $_SESSION['password'] = $row1['password'];
        $_SESSION['marital_status'] = $row1['marital_status'];
        $_SESSION['user_account_name'] = $row1['user_account_name'];
        $_SESSION['user_account_type'] = $row1['user_account_type'];

        if (isset($_POST['remember'])) {
          setcookie("Username", $row1['user_account_name'], time() + (86400 * 30));
          setcookie("password", $password, time() + (86400 * 30));
        }

        if ($row1['user_account_type'] == 'admin') {
          header('Location:admin.php');
        } elseif ($row1['user_account_type'] == 'physician') {
          header('Location:physician.php');
        } elseif ($row1['user_account_type'] == 'fpworker') {
          header('Location:fpworker.php');
        } elseif ($row1['user_account_type'] == 'mother') {
          header('Location:mother.php');
        }
      } else {
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_account_name'] = $row['user_account_name'];
        header('Location:first_time.php');
      }
    } else {
      $_SESSION['flash_message'] = "Invalid Password";
    }
  }
}
?>

<body>
  <!-- <div class="container">
    <div class="logincont">
    <center>
      <h1 style="color:green; margin-top:10%" class="text-focus-in">Mobile Aided Maternal Health Advisory System.
      </h1>
    </center>

    <center>
      <img src="images/hospital (2).png?>" width="150" height="150">
    </center>

    <center>
      <h2>Login</h2>
    </center>
    <br>
    <form class="form-horizontal" method="post" action="index.php">

      <center>
        <span class="message">
           
      </center>

      <div class="form-group">
        <label class="control-label col-sm-2" for="Username">Username:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Username" placeholder="Enter Username" name="Username"
            value="" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="myInput">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="myInput" placeholder="Enter password" name="password"
            value="" required>
          <input type="checkbox" name="remember"
            value="">
          Remember me
          <input type="checkbox" onclick="myFunction()">Show Password<br>
          <a href="recovery.php">Forget Username or Password</a>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <center><button type="submit" class="btn btn-primary">Login</button></center>
        </div>
      </div>
    </form>
    </div>
  </div> -->
       <div class="con">
  <center>
    <div class="form-container">
          <form class="form"  method="post" action="index.php">

          <center>
            <span class="message">
                <?php
                if (isset($_SESSION['flash_message'])) 
                  echo $_SESSION['flash_message'];?>
                        <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
                <? unset($_SESSION['flash_message']);
                
                ?>
            </span>
          </center>

          
          <center>
          <img src="images/hospital (2).png?>" width="80" height="80">
        </center>
        <center>
          <h1 style="color:white; margin-top:1%"   class="text-focus-in">MAMHAS
          </h1>
        </center>
            <div class="form-group">
              <label for="Username">Username</label>
              <input required="" placeholder="Enter username" name="Username" id="Username" type="text" value="<?php if (isset($_COOKIE["Username"])) {echo $_COOKIE["Username"];}?>" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input required="" id="password" placeholder="Enter password" name="password"
                value="<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>" required>
            </div>
            <button type="submit" class="form-submit-btn">login</button>
          </form>
        </div>
      </div>
    </center>
    </div>  

</body>

</html>
