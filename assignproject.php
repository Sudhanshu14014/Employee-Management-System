<?php

require_once ('process/dbcon.php');
$sql = "SELECT * from `project` order by subdate desc";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Projects</title>
</head>
<body>
<nav>
        <ul>
            <li>
                <h2>EMS</h2>
            </li>
            <li>
                <a href="./aloginwel.php">Home</a>
            </li>
            <li>
                <a href="./addEmployee.php">Add Employee</a>
            </li>
            <li>
                <a href="./viewemplyee.php">View Employee</a>
            </li>
            <li>
                <a href="./assignproject.php">Assign Project</a>
            </li>
            <li>
                <a href="./viewproject.php">Project Status</a>
            </li>
            <li>
                <a href="./salarytab.php">Salary Table</a>
            </li>
            <li>
                <a href="./employeeleave.php">Employee Leave</a>
            </li>
            <li>
                <a href="./adminlogin.html">Log out</a>
            </li>
        </ul>
    </nav>
    <div>
        <h2>Assign Project</h2>
        <form action="./process/assignp.php" method="POST">
            <input type="text" name="employeeID" placeholder="Employee ID">
            <input type="text" name="Project" placeholder="Project Name">
            <input type="date" name="projectDate" placeholder="MM/DD/YYYY">
            <input type="submit" value="Assign">
        </form>
    </div>
</body>
</html>