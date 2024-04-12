<?php
    include_once 'user_activity_log.php'; 
    include "header2.php";
?>
 
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
<body>
    <div class="container">
        <div class="cw-info-box">
            <p><strong>Your Activity Log</strong></p>
            <div class="log-data">
                <p><b>Ip Address</b> : <?php echo $user_ip_address; ?></p>
                <p><b>User Agent</b> : <?php echo $user_agent; ?></p>
                <p><b>Current page url</b> : <?php echo $user_current_url; ?></p>
                <p><b>Referrer url</b> : <?php echo $referrer_url; ?></p>
            </div>
        </div>
    </div>
</body>
</html>