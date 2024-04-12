<?php
    session_start();
?>
<html>
 <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet">
   <script language="javascript" >
       function check(){
var le = 4;

if (document.sign.fname.value.length<=le) {
  alert( "Please provide your FirstName correcty,NAME length must be above 4!" );
  document.sign.fname.focus() ;
  return false;
}
if (document.sign.lname.value.length<=2) {
  alert( "Please provide your LastName correcty,NAME length must be above 4!" );
  document.sign.lname.focus() ;
  return false;
}


if (!/^[a-zA-Z]*$/g.test(document.sign.fname.value)) {
        alert("Invalid Name");
        document.sign.fname.focus();
      return false;
   }

    if (!/^[a-zA-Z]*$/g.test(document.sign.lname.value)) {
            alert("Invalid Name");
            document.sign.lname.focus();
            return false;
                  }
 if (!/^[a-zA-Z]*$/g.test(document.sign.username.value)) {
            alert("Invalid Username");
            document.sign.username.focus();
            return false;
                  }
                  if (document.sign.username.value.length<5) {
  alert( "Username length must above 4 characters" );
  document.sign.username.focus() ;
  return false;
}

var x=document.sign.email.value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || document.sign.email.length<=100) {
alert("Not a valid e-mail address");
document.sign.email.focus();
return false;
}


if ( document.sign.password.value.length<=5 ) {
  alert( "Please provide your password correcty,password length must be above 5!" );
  document.sign.password.focus() ;
  return false;
}

if ( document.sign.pass2.value.length<=5 ) {
  alert( "Please provide your re-password correcty,password length must be above 5!" );
  document.sign.pass2.focus() ;
  return false;
}
if ( document.sign.pass2.value !== document.sign.password.value ) {
  alert( "your password don't match!" );
  document.sign.pass2.focus() ;
  return false;
} }</script>
</head>
         <body>
    <div id="h" class="headd">
      <a id="hh" href="contact.php">Contact</a>
      <a id="hh" href="signup.php">Signup</a>
      <a id="hh" href="login.php">Login</a>
      <a id="hh" href="home.php">Home</a>
    </div>
    <br> <br> <br><br><br>
   
<div class="testbox">
  <h1>Create your account</h1>
<fieldset>
  <form class="" action="signup.php" method="post"  name="sign" onsubmit="return check()" >
    <hr>
            <span style="color:green" >
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
	</span>
   <hr>
   FirstName
   <input type="text" name="fname" id="name" placeholder="FirstName" required/>
   LastName
  <input type="text" name="lname" id="name" placeholder="LastName" required/>
  UserName
  <input type="text" name="username" id="name" placeholder="UserName" required/>
  Email
  <input type="text" name="email" id="name" placeholder="Email" required/>  <b>

  Password
  <input type="text" name="password" id="name" placeholder="Password" required/>
  Password
  <input type="text"  name="pass2" id="name" placeholder="Re-Enter-Password" required/>
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <p>By clicking signup, you agree on our <a href="#">terms and condition</a>.</p>
  <input type="submit" name="signup" class="submit" value="Signup"></input>
    </form>
</fieldset>
</div>
<br><br><br>
<footer>
</footer>
<?php 
if(isset($_POST['signup'])){
	include('conn.php');
$email=$_POST['email'];
$username=$_POST['username'];
$query1=mysqli_query($conn,"select * from user where username='$username' ");
$query=mysqli_query($conn,"select * from user where email='$email' ");
if(mysqli_num_rows($query1)>0){
						$_SESSION['message']="Username is already used ";
}
                       
else        {
    if(mysqli_num_rows($query)>0){
						$_SESSION['message']="Email is already used ";
}
    else{
   $fname = $_POST['fname'];
	$lname= $_POST['lname'];
    //$username= $_POST['username'];
    //$email= $_POST['email'];
	$password= $_POST['password'];
	//$hash =password_hash($password, PASSWORD_DEFAULT);
$sql=mysqli_query($conn,"INSERT INTO user (fname,lname,username,email,password) VALUES ('$fname', '$lname', '$username','$email', '$password')");
if(!$sql){
//header('location:home.php');

	echo "error2";
}	
else {
    header('location:home.php');
						$_SESSION['message']="Account created Please Login ";

}
//$_SESSION['email']=$email;
//$_SESSION['password']=$hash;
    }
}
}

//mysqli_close($conn);
?>
  </body>
</html>
