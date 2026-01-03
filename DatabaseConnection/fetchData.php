<?php
require 'databaseconnection.php';

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
}

echo "<script>const Employees = ".json_encode($data).";</script>";
?>
