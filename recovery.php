<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,
			initial-scale=1">
	<style>
		.overlay {
			height: 0%;
			width: 100%;
			position: fixed;
			top: 0;
			right: 0;
			background-color: #1a6e1a;
			overflow-y: hidden;
			transition: 1.0s;
		}

		.overlay-content {
			position: relative;
			top: 25%;
			width: 40%;
			text-align: left;
		}

		.overlay a {
			text-decoration: none;
			font-size: 30px;
			color: white;
			display: block;
			transition: 0.3s;
		}

		.overlay a:hover,
		.overlay a:focus {
			color: black;
		}

		.overlay .closebtn {
			position: absolute;
			top: 10px;
			left: 35px;
			font-size: 30px;
		}
	</style>
</head>

<body>

	<div id="myNav" class="overlay">
		<a href="javascript:void(0)"
			class="closebtn" onclick="closeNav()">
			×
		</a>
		<div class="overlay-content">
			<a href="#">About</a>
			<a href="#">Practice</a>
			<a href="#">Courses</a>
			<a href="#">Contact</a>
		</div>
	</div>
	
	<div align="right" style="font-size:50px;cursor:pointer"
			onclick="openNav()">
		≡
	</div>

	<h2></h2>


	<script>
		function openNav() {
			document.getElementById(
				"myNav").style.height = "50%";
		}

		function closeNav() {
			document.getElementById(
				"myNav").style.height = "0%";
		}
	</script>
</body>

</html>


 <?php
 session_start();
 include('config.php');

 if ($_POST) {
    $Username=$_POST['username'];
    $sql = "SELECT * FROM `user` where user_account_name ='$Username' ";
    $query =  mysqli_query($conn, $sql);
 if(mysqli_num_rows($query)>0){
 $_SESSION['flash_message']="Username &nbsp $Username &nbsp Found ";
 }
 else{
 $_SESSION['flash_message']="No result !"; }
 }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Recovery</title>
    <style>
    .message{
 background-color:black;
  color:red;
        }
        
  </style>
  </head>
  <body>
    <div class="container">
      <h2>Find Username</h2>
      <form method="post">
        <div class="form-group">
          <label for="username">Enter Username :</label>
          <input type="text" class="form-control" id="fname" name="username" placeholder="Enter Username" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" >Check Username</button>
      </form>
      </div>
    </div>
    <center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
	?>
	</div></span></center> 

      </div>
  </body>
</html> 
   <!--  <!DOCTYPE html>  
    <html>  
    <head>  
    <style>  
    .error {color: #FF0001;}  
    </style>  
    </head>  
    <body>    
      
    <?php  
    // define variables to empty values  
    $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
    $name = $email = $mobileno = $gender = $website = $agree = "";  
      
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          
    //String Validation  
        if (emptyempty($_POST["name"])) {  
             $nameErr = "Name is required";  
        } else {  
            $name = input_data($_POST["name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }  
          
        //Email Validation   
        if (emptyempty($_POST["email"])) {  
                $emailErr = "Email is required";  
        } else {  
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr = "Invalid email format";  
                }  
         }  
        
        //Number Validation  
        if (emptyempty($_POST["mobileno"])) {  
                $mobilenoErr = "Mobile no is required";  
        } else {  
                $mobileno = input_data($_POST["mobileno"]);  
                // check if mobile no is well-formed  
                if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
                $mobilenoErr = "Only numeric value is allowed.";  
                }  
            //check mobile no length should not be less and greator than 10  
            if (strlen ($mobileno) != 10) {  
                $mobilenoErr = "Mobile no must contain 10 digits.";  
                }  
        }  
          
        //URL Validation      
        if (emptyempty($_POST["website"])) {  
            $website = "";  
        } else {  
                $website = input_data($_POST["website"]);  
                // check if URL address syntax is valid  
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
                    $websiteErr = "Invalid URL";  
                }      
        }  
          
        //Empty Field Validation  
        if (emptyempty ($_POST["gender"])) {  
                $genderErr = "Gender is required";  
        } else {  
                $gender = input_data($_POST["gender"]);  
        }  
      
        //Checkbox Validation  
        if (!isset($_POST['agree'])){  
                $agreeErr = "Accept terms of services before submit.";  
        } else {  
                $agree = input_data($_POST["agree"]);  
        }  
    }  
    function input_data($data) {  
      $data = trim($data);  
      $data = stripslashes($data);  
      $data = htmlspecialchars($data);  
      return $data;  
    }  
    ?>  
      
    <h2>Registration Form</h2>  
    <span class = "error">* required field </span>  
    <br><br>  
    <form method="post" >    
        Name:   
        <input type="text" name="name">  
        <span class="error">* <?php echo $nameErr; ?> </span>  
        <br><br>  
        E-mail:   
        <input type="text" name="email">  
        <span class="error">* <?php echo $emailErr; ?> </span>  
        <br><br>  
        Mobile No:   
        <input type="text" name="mobileno">  
        <span class="error">* <?php echo $mobilenoErr; ?> </span>  
        <br><br>  
        Website:   
        <input type="text" name="website">  
        <span class="error"><?php echo $websiteErr; ?> </span>  
        <br><br>  
        Gender:  
        <input type="radio" name="gender" value="male"> Male  
        <input type="radio" name="gender" value="female"> Female  
        <input type="radio" name="gender" value="other"> Other  
        <span class="error">* <?php echo $genderErr; ?> </span>  
        <br><br>  
        Agree to Terms of Service:  
        <input type="checkbox" name="agree">  
        <span class="error">* <?php echo $agreeErr; ?> </span>  
        <br><br>                            
        <input type="submit" name="submit" value="Submit">   
        <br><br>                             
    </form>  
      
    <?php  
        if(isset($_POST['submit'])) {  
        if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  
            echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
            echo "<h2>Your Input:</h2>";  
            echo "Name: " .$name;  
            echo "<br>";  
            echo "Email: " .$email;  
            echo "<br>";  
            echo "Mobile No: " .$mobileno;  
            echo "<br>";  
            echo "Website: " .$website;  
            echo "<br>";  
            echo "Gender: " .$gender;  
        } else {  
            echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
        }  
        }  
    ?>  
      
    </body>  
    </html>  -->