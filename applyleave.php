<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbcon.php');
	$sql = "SELECT * FROM `employee` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Leave</title>
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
    <div>
        <form action="./empleaveprocess.php?id=<?php echo $id?>" method="POST">
            <input type="text" placeholder="Reason">
            <label for="startdate">Start Date</label>
            <input type="date" name='startdate'>
            <label for="duedate">End Date</label>
            <input type="date" name='duedate'>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>