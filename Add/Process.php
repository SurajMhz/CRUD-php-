<?php
require '../DatabaseConnection/databaseconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
	$supervisor=$_POST["supervisor"];
    $faculty=$_POST["faculty"];
    $role=$_POST["role"];
    $sql = "INSERT INTO Users (name, supervisor, faculty, role) VALUES ('$name', '$supervisor', '$faculty', '$role')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../mainpage.php");
		exit();
    } else {
        header("Location: AddEmployee.php?error=1");
    }
}
?>

