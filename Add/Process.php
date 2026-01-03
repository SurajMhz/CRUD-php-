<?php
require '../DatabaseConnection/databaseconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["Fname"];
	$lname = $_POST["Lname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["Gender"];
    $phone = $_POST["phone"];
    $hobbies = $_POST["hobbies"];
    $sql = "INSERT INTO Student (fname, lname, email, dob, gender, phone, hobbies) VALUES ('$fname', '$lname', '$email', '$dob', '$gender', '$phone', '$hobbies')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../mainpage.php");
		exit();
    } else {
        header("Location: AddStudent.php?error=1");
    }
}
?>

