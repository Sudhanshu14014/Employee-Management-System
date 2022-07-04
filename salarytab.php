<?php

require_once ('process/dbcon.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Table</title>
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
    <table>
        <tr>
            <th><td>Emp. ID</td></th>
            <th><td>Name</td></th>
            <th><td>Base Salary</td></th>
            <th><td>Bonus</td></th>
            <th><td>Total Salary</td></th>
            
        </tr>

        <?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
				
                }

			?>
    </table>
</body>
</html>