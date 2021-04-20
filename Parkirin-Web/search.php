<?php
include "connect.php";
$url_id = mysql_real_escape_string($_POST['id'])
$sql = "SELECT id_pegawai FROM pegawai WHERE id='$url_id'";
$result = mysql_query($sql)

if(mysql_num_rows($sql) > 0){
    header("Location:welcomePeg.html");
    exit;
}
else{ 
    echo "Invalid ID"
}    
?>