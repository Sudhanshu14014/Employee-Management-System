<?php
    $server = "localhost";
    $root = "root";
    $password = "1234";
    $db = "ems";

    $conn = mysqli_connect($server, $root, $password, $db);

    if(!$conn){
        echo "Connection Failed";
    }
    else{
        echo "Conntected";
    }
    
?>