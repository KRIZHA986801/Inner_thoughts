<?php 
    session_start();
    $conn= new mysqli('localhost','sign_log','','inner_name')or die("Could not connect to mysql".mysqli_error($con));
?>
