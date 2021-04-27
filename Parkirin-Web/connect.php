<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "parkirin";
    $conn = new mysqli($server,$user,$pass,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>