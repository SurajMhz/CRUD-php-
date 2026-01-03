<?php
require_once "../DatabaseConnection/databaseconnection.php";

$id=$_POST['id'];
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['Gender'];
$phone=$_POST['phone'];
$hobbies=$_POST['hobbies'];

$sql="UPDATE Student SET
fname='$fname',
lname='$lname',
email='$email',
dob='$dob',
gender='$gender',
phone='$phone',
hobbies='$hobbies'
WHERE id=$id";

$conn->query($sql);

header("Location: ../mainpage.php");
exit;
