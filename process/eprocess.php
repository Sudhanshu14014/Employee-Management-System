<?php

    require_once("./dbcon.php");

    $email= $_POST("eemail");
    $password= $_POST("epassword");

    $query = "SELECT * FROM `elogin` TABLE WHERE email='$email' AND password = '$password' ";

    $queryid = "SELECT id FROM `elogin` TABLE WHERE email='$email' AND password = '$password' ";

    $result = mysqli_query($conn, $query);
    $resultid = mysqli_query($conn, $queryid);

    $empid = "";
    
    if(mysqli_num_rows($result)==1){
        $empid = mysqli_fetch_array($resultid)['id'];
        header("Location: ..//eloginwel.php?id=$empid");
    }

    else{
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invaild Email or password')
        </SCRIPT>");
    }
?>