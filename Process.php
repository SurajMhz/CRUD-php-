<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Process</title>
</head>
<body>

<h1>Process</h1>

<script>
	let LocalCheck=JSON.parse(localStorage.getItem("Employees"));
	let Employees=LocalCheck?LocalCheck:[];
	let CurrentEmployee=null;
</script>

<?php
	$CurrentEmployee=null;

	if(isset($_POST["Name"])){
		$CurrentEmployee=[ 
			"Name"=>$_POST["Name"],
			"Manager"=>$_POST["Manager"],
			"Faculty"=>$_POST["Faculty"],
			"Role"=>$_POST["Role"]
		];
	}
?>

<script>
	CurrentEmployee=<?php echo json_encode($CurrentEmployee); ?>;

	if(CurrentEmployee){
		Employees.push(CurrentEmployee);
		localStorage.setItem("Employees",JSON.stringify(Employees));
        window.location.href = "./mainpage.php";
	}
    
</script>

</body>
</html>
