<?php
session_start();
include('config.php');

if (isset($_GET['id'])) {
    $medication_id = $_GET['id'];
    mysqli_query($conn, "delete from medication where medication_id='$medication_id'");
    header('location:medication_view.php');
                echo "<script>alert('Medication Successfully Deleted!');</script>";
} else {
    echo "Appointment ID not provided";
}
?>
