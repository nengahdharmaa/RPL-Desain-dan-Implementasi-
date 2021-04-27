<?php

if(isset($_POST['Submit'])){

    include_once("connect.php");

    $tipe = $_POST['tipe'];
    $plat = $_POST['plat_no'];
    $sql = "INSERT INTO Kendaraan (tipe_kendaraan, plat_nomor)
    VALUES ('$tipe', '$plat')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: welcomePeng.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
}
?>