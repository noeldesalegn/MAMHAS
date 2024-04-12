<?php

include "config.php";

if($_POST)
{
	$Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$Phnumber=$_POST['Phnumber'];
	$address=$_POST['address'];
    $Username=$_POST['Username'];
    $maritalstatus=$_POST['maritalstatus'];
	$gender=$_POST['gender'];
	$birthday=$_POST['birthday'];
$sql="INSERT INTO `register`(`Fname`,`Lname`, `email`, `password`, `Phnumber`, `address`, `Username`, `gender`, `maritalstatus`, `birthday`) VALUES ('".$Fname."','".$Lname."','".$email."','".$password."','".$Phnumber."','".$address."','".$Username."','".$gender."','".$maritalstatus."','".$birthday."')";
 
	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['Fname'] = $Fname;
		header('Location: home.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
    
?>