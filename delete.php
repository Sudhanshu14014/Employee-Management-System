<?php

include("./process/dbcon.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM employee WHERE id=$id");

header("Location: viewemplyee.php")

?>
