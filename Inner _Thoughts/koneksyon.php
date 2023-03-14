<?php
    $db_servername = "localhost";
    $db_username = "sign_log";
    $db_password = "";
    $db_database = "inner_name";

    // Create connection

    $conn = new mysqli($db_servername, $db_username, $db_password, $db_database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>