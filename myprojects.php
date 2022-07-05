<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('./process/dbcon.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
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

    <table>
        <tr>
            <th>Project ID</th>
            <th>Project Name</th>
            <th>Due Date</th>
            <th>Sub Date</th>
            <th>Mark</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
        
        <?php
				while ($employee = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					

					 echo "<td><a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Submit</a>";

                }
			?>
    </table>
</body>
</html>