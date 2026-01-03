<?php
require '../DatabaseConnection/databaseconnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM student WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../mainpage.php?deleted=true");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>