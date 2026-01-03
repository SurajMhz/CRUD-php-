<?php
require_once "../DatabaseConnection/databaseconnection.php";

if(!isset($_GET['id'])){
	die("Invalid request");
}

$id=$_GET['id'];

$sql="SELECT * FROM Student WHERE id=$id";
$result=$conn->query($sql);

if($result->num_rows!=1){
	die("Student not found");
}

$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Student</title>
	<link rel="stylesheet" href="../assets/css/AddStudent.css">
</head>

<body>
	<div class="Container">
		<form class="Form" method="post" action="UpdateProcess.php">
			<h1 class="Top">Update Student</h1>

			<input type="hidden" name="id" value="<?= $row['id'] ?>">

			<input class="InputBox" name="Fname" type="text"
				value="<?= htmlspecialchars($row['fname']) ?>" required>

			<input class="InputBox" name="Lname" type="text"
				value="<?= htmlspecialchars($row['lname']) ?>" required>

			<input class="InputBox" name="email" type="email"
				value="<?= htmlspecialchars($row['email']) ?>" required>

			<input class="InputBox" name="dob" type="text"
				value="<?= htmlspecialchars($row['dob']) ?>" required>

			<p>Select Gender:</p>
			<div class="Radio">
				<label>
					<input type="radio" name="Gender" value="Male"
					<?= $row['gender']=="Male"?"checked":"" ?>>Male
				</label>
				<label>
					<input type="radio" name="Gender" value="Female"
					<?= $row['gender']=="Female"?"checked":"" ?>>Female
				</label>
				<label>
					<input type="radio" name="Gender" value="others"
					<?= $row['gender']=="others"?"checked":"" ?>>others
				</label>
			</div>

			<input class="InputBox" name="phone" type="number"
				value="<?= htmlspecialchars($row['phone']) ?>" required>

			<input class="InputBox" name="hobbies" type="text"
				value="<?= htmlspecialchars($row['hobbies']) ?>">

			<button class="submit" type="submit">Update</button>
		</form>
	</div>
</body>
</html>
