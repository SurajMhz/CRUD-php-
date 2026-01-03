<?php
include("./DatabaseConnection/databaseconnection.php");

session_start();
$User = $_SESSION['username'];
if (!$User) {
    header("Location: Login/LoginPage.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="./assets/css/page.css">
    <header>
        <h1>Welcome to Dashboard <?php echo $User; ?></h1>
        <div class="headCard">

            <h1>Student Management System</h1>
            <a href="./Add/AddStudent.php" class="AddButton">+ Add Student</a>
        </div>

    </header>

    <?php
    require './DatabaseConnection/databaseconnection.php';

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo "<script>const Students = " . json_encode($data) . "; </script>";
    ?>

    <main>
        <div class="DataContainer"></div>
    </main>

</body>

<script>
function CardGen(Data){
	const Container=document.querySelector(".DataContainer");

	const Card=document.createElement("div");
	Card.classList.add("Card");
	Card.dataset.id=Data.id;

	const TopData=document.createElement("div");
	TopData.classList.add("TopData");

	const Name=document.createElement("h3");
	Name.innerText=Data.fname+" "+Data.lname;
	TopData.appendChild(Name);

	const MiddleData=document.createElement("div");
	MiddleData.classList.add("MiddleData");

	const Table=document.createElement("table");

	function row(label,value){
		const tr=document.createElement("tr");
		const td1=document.createElement("td");
		const td2=document.createElement("td");
		td1.innerText=label;
		td2.innerText=value;
		tr.appendChild(td1);
		tr.appendChild(td2);
		return tr;
	}

	Table.appendChild(row("Email",Data.email));
	Table.appendChild(row("DOB",Data.dob));
	Table.appendChild(row("Gender",Data.gender));
	Table.appendChild(row("Phone",Data.phone));
	if(Data.hobbies)Table.appendChild(row("Hobbies",Data.hobbies));

	MiddleData.appendChild(Table);

	const BottomData=document.createElement("div");
	BottomData.classList.add("BottomData");
	BottomData.innerHTML=`
		<a href="./Update/UpdateStudent.php?id=${Data.id}">Edit</a>
		<a href="./Delete/delete.php?id=${Data.id}">Delete</a>
	`;

	Card.appendChild(TopData);
	Card.appendChild(MiddleData);
	Card.appendChild(BottomData);

	Container.appendChild(Card);
}
    function DisplayAll(Datas) {
        document.querySelector(".DataContainer").innerHTML = "";
        Datas.forEach(element => {
            CardGen(element);
        });
    }
    Students.length > 0
        ? DisplayAll(Students)
        : document.querySelector(".DataContainer").innerHTML = "No Students Found";
</script>


</html>