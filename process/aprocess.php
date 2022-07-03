<?php

    require_once("./dbcon.php");

    $email= $_POST["aemail"];
    $password= $_POST["apassword"];

    $query = "SELECT * FROM `adminlogin` WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1){
        header("Location: ..//aloginwel.php");
    }

    else{
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invaild Email or password')
        </SCRIPT>");
    }
?>