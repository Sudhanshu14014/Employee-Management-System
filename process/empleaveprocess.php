<?php

require_once ('dbh.php');

$id = $_GET['id'];
$reason = $_POST['reason'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "INSERT INTO `employee_leave`(`id`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id','','$start','$end','$reason','Pending')";

$result = mysqli_query($conn, $sql);

header("Location:..//eloginwel.php?id=$id");
?>

