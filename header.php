<?php
  session_start();
  include "config.php";
 if(isset($_SESSION['FName']))
	{            
  if($_SESSION['user_account_type'] == 'admin') {
      header('Location: admin.php'); 
  } elseif ($_SESSION['user_account_type'] == 'physician') {
    header('Location: physician.php');
  } elseif ($_SESSION['user_account_type'] == 'fpworker') {
    header('Location: fpworker.php');
  } elseif ($_SESSION['user_account_type'] == 'mother') {
        $_SESSION['user_account_type'] ='mother';
    header('Location:mother.php');
  }  
        
    }
 else { 
  header('Location:index.php');
 } 
 ?>



  