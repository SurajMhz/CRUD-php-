<?php
require_once "../DatabaseConnection/databaseconnection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$supervisor = $_POST['supervisor'];
$faculty = $_POST['faculty'];
$role = $_POST['role'];

$sql = "UPDATE Users SET 
	name='$name',
	supervisor='$supervisor',
	faculty='$faculty',
	role='$role'
	WHERE id=$id";

$conn->query($sql);

header("Location: ../mainpage.php");
