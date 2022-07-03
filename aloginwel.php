<?php

    require_once("./process/dbcon.php");

    $query = "SELECT id,firstName, lastName, points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";

    $result = mysqli_query($conn,$query);
?>

<html>
<head>
    <title>Admin Panel </title>
    <link rel="stylesheet" type="text/css" href="stylesheetlogin.css">
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
    <h2>Employee Leaderborad</h2>
    <table>
        <tr>
            <th>Seq.</th>
            <th>Emp. ID</th>
            <th>Name</th>
            <th>Point</th>
        </tr>
        
        <?php

            $seq = 1;
            while ($employee = mysqli_fetch_assoc($result)){
                echo "<tr>";
                    echo "<td>".$seq."</td>";
                    echo "<td>".$employee['id']."</td>";
                    echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
                    echo "<td>".$employee['points']."</td>";
                    $seq+=1;
            }
        ?>
    </table>
    <div>
        <button>Reset Points</button>
    </div>
</body>
</html>

        