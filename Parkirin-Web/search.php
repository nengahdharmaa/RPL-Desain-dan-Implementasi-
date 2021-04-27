<?php

include_once("connect.php")

$id = mysql_real_escape_string($_REQUEST['id']);
$sql = "SELECT * FROM pegawai WHERE id='$id'";
$result = mysql_query($sql)

if(mysql_num_rows($sql) > 0){
    echo 'ID found';
    header('Location: http://www.welcomePeg.html');
    exit;
}
else{ 
    echo 'Invalid ID';
}    

?>