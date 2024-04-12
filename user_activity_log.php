<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }

  </style>
  </head>
  <body>
  <?php 
 
// Include the database configuration file 
include "config.php";  
// Get current page URL 
$protocol = !empty($_SERVER['HTTPS']) &&( $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://"; 
 
$user_current_url = addslashes($protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']); 
 
// Get server related info 
$user_ip_address =$_SERVER['REMOTE_ADDR']; 
$referrer_url = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
 
// Insert visitor activity log into database 
 
//$sql = "INSERT INTO visitor_activity_logs (user_ip_address, user_agent, page_url, referrer_url, created_on) VALUES ($user_ip_address, $user_agent,$user_current_url,$user_agent ,NOW())"; 
 $sql = "INSERT INTO `visitor_activity_logs` ( `user_ip_address`, `user_agent`, `page_url`, `referrer_url`, `created_on`) VALUES ($user_ip_address, $user_agent,$user_current_url,$referrer_url,current_timestamp())";
if ($insert = $conn->query($sql)){
echo Sussess ; }
else{
    echo error . mysqli_error($conn);
}

?>
  </body>