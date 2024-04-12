<?php
session_start();
include('config.php');
    $id = $_GET['id'];
   $sql=mysqli_query($conn, "delete from appointment_detail  where id='$id'");
   if ($sql) {
      echo "<script>setTimeout(function(){window.location.href='View_appointment.php';},1);</script>";
            echo "<script>alert('Appointment details Deleted successfully!');</script>";
} else {
    echo "Appointment ID not provided";
}
?>
