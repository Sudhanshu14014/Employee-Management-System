<?php

require_once ('dbcon.php');

$pname = $_POST['Project'];
$eid = $_POST['employeeID'];
$subdate = $_POST['projectDate'];

$sql = "INSERT INTO `project`(`eid`,`pname`,`duedate`,`status`) VALUES ('$eid','$pname','$subdate','Due')";

$result = mysqli_query($conn, $sql);


if($result == 1){
header("Location:..//viewproject.php?id=$id");
}
else{
    echo("<SCRIPT LANGUAGE='JavaScript'>
    windows.alert('Failed to Assign')
    </SCRIPT>");
}
?>
