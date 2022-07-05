<?php

    require_once("./process/dbcon.php");
    $id = (isset($_GET['id']) ? $_GET['id'] : '');
    $sql1 = "SELECT * FROM `employee` WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    $employeen = mysqli_fetch_array($result1);
    $empName = ($employeen['firstName']);

    $sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
    $sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = '$id' and status = 'Due'";

    $sql2 = "Select * From employee, employee_leave Where employee.id = '$id' and employee_leave.id = '$id' order by employee_leave.token";

    $sql3 = "SELECT * FROM `salary` WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);

?>

<html>
<head>
    <title>Employee Panel </title>
    <link rel="stylesheet" type="text/css" href="stylesheetlogin.css">
</head>
<body>
<nav>
        <ul>
            <li>
                <h2>EMS</h2>
            </li>
            <li>
                <a href="./eloginwel.php">Home</a>
            </li>
            <li>
                <a href="./myprojects.php">My Project</a>
            </li>
            <li>
                <a href="./employeeProfile.php">My Profile</a>
            </li>
            <li>
                <a href="applyleave.php">Apply Leave</a>
            </li>
            <li>
                <a href="./emplogin.html">Log out</a>
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
    <h2>Due Projects</h2>
    <table>
        <tr><th>Project Name</th></tr>
        <tr><th>Due Date</th></tr>
        <?php
				while ($employee1 = mysqli_fetch_assoc($result1)) {
					echo "<tr>";

					echo "<td>" . $employee1['pname'] . "</td>";

					echo "<td>" . $employee1['duedate'] . "</td>";
				}
				?>

    </table>
    <h2>Salary Status</h2>
    <table>
        <tr><th>Base Salary</th></tr>
        <tr><th>Bonus</th></tr>
        <tr><th>Total Salary</th></tr>
        <?php
				while ($employee = mysqli_fetch_assoc($result3)) {
					echo "<tr>";

					echo "<td>" . $employee['base'] . "</td>";

					echo "<td>" . $employee['bonus'] . "%</td>";
					echo "<td>" . $employee['total'] . "</td>";
				}
				?>

    </table>

    <h2>Leave Status</h2>
    <table>
        <tr><th>Start Date</th></tr>
        <tr><th>End Date</th></tr>
        <tr><th>Total Days</th></tr>
        <tr><th>Reason</th></tr>
        <tr><th>Status</th></tr>
        <?php
				while ($employee = mysqli_fetch_assoc($result2)) {
                    $date1= new DateTime($employee['start']);
                    $date2 = new DateTime($employee['end']);
                    $interval = $date1->diff($date2);
                    $interval = $date1->diff($date2);                
					echo "<tr>";
                    
					echo "<td>" . $employee['start'] . "</td>";
					echo "<td>" . $employee['end'] . "</td>";
					echo "<td>" . $interval->days . "</td>";
					echo "<td>" . $employee['reason'] . "</td>";
					echo "<td>" . $employee['status'] . "</td>";
				}
				?>

    </table>
</body>
</html>

        