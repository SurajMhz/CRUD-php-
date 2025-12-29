<?php
require_once "../DatabaseConnection/databaseconnection.php";

if(!isset($_GET['id'])){
	die("Invalid request");
}

$id = $_GET['id'];

$sql = "SELECT * FROM Users WHERE id=$id";
$result = $conn->query($sql);

if($result->num_rows!=1){
	die("Employee not found");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Employee</title>
	<link rel="stylesheet" href="../assets/css/AddEmp.css">
</head>

<body>
	<div class="Container">
		<form class="Form" method="post" action="updateProcess.php">
			<h1 class="Top">Update Employee</h1>

			<input type="hidden" name="id" value="<?= $row['id'] ?>">
			<input class="InputBox" name="name" type="text"
				value="<?= htmlspecialchars($row['name']) ?>" required>

			<input class="InputBox" name="supervisor" type="text"
				value="<?= htmlspecialchars($row['supervisor']) ?>" required>
			<p>Select Faculty:</p>
			<div class="Radio">

					<?= $row['faculty']=="javascript"?"checked":"" ?> javascript</label>

				<label><input type="radio" name="faculty" value="python"
					<?= $row['faculty']=="python"?"checked":"" ?>> python</label>
				<label><input type="radio" name="faculty" value="java"
					<?= $row['faculty']=="java"?"checked":"" ?>> java</label>

				<label><input type="radio" name="faculty" value="c"
					<?= $row['faculty']=="c"?"checked":"" ?>> c</label>
			</div>

			<label class="Role">Choose Role:
				<select name="role" required>
					<option value="Client_Handler" <?= $row['role']=="Client_Handler"?"selected":"" ?>>Client_Handler</option>
					<option value="IT_Support" <?= $row['role']=="IT_Support"?"selected":"" ?>>IT_Support</option>
					<option value="Intern" <?= $row['role']=="Intern"?"selected":"" ?>>Intern</option>
					<option value="Coach" <?= $row['role']=="Coach"?"selected":"" ?>>Coach</option>
					<option value="Supervisor" <?= $row['role']=="Supervisor"?"selected":"" ?>>Supervisor</option>
				</select>
			</label>

			<button class="submit" type="submit">Update</button>
		</form>
	</div>
</body>
</html>
