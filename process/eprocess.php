<?php

    require_once("./dbcon.php");

    $email= $_POST["eaemail"];
    $password= $_POST["epassword"];

    $query = "SELECT * FROM `employee`  WHERE email='$email' and password = '$password'";

    $queryid = "SELECT id FROM `employee` WHERE email='$email' and password = '$password'";

    $result = mysqli_query($conn, $query);
    $resultid = mysqli_query($conn, $queryid);

    $empid = "";
    
    if(mysqli_num_rows($result)==1){
        $empid = mysqli_fetch_array($resultid)['id'];
        header("Location: ../eloginwel.php?id=$empid");
    }

    else{
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invaild Email or password')
        </SCRIPT>");
    }
?>