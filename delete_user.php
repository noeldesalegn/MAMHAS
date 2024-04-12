<?php
   session_start();
  include "config.php";
  include "admin_header.php"; 
            
  if($_SESSION['user_account_type'] == 'admin') {
$id=$_GET['id'];
$query= mysqli_query($conn,"delete from user where id='$id'");
if ($query){
    $check=mysqli_query($conn,"SELECT * FROM `appointment_detail` where m_id='$id' ");
    if ($check){
          $query1 = mysqli_query($conn, "delete from appointment_detail  where m_id='$id' ");
    }
        $check1=mysqli_query($conn,"SELECT * FROM `medication` where m_id='$id' ");
if($check1){
              $query2 =mysqli_query($conn, "delete from medication where m_id='$id'");
}

    echo "<script>setTimeout(function(){window.location.href='detail.php';},1);</script>";
            echo "<script>alert('User  Deleted successfully!');</script>";
    }
   else 
   {

 $_SESSION['flash_message']="User Didn't Deleted Successfully";
    header('location:detail.php');
    }
  }
    else {
         $_SESSION['flash_message']="Please Login !";
    header('location:index.php');
    }
?>

