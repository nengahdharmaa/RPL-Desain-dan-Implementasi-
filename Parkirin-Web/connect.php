<?php
    $link = new mysqli('localhost','root','root','parkirin');
    if (mysqli_connect_errno()) {
        echo "Connection failed"
        exit();
    }
?>