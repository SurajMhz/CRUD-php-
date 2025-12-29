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
            
            <h1>Employee Management System</h1>
            <a href="./Add/AddEmployee.php" class="AddButton">+ Add Employee</a>
        </div>

    </header>

    <?php
    require './DatabaseConnection/databaseconnection.php';

    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo "<script>const Employees = " . json_encode($data) . "; console.log(Employees);</script>";
    ?>

    <main>
        <div class="DataContainer"></div>
    </main>

</body>

<script>
    function CardGen(Data) {
        const Container = document.querySelector(".DataContainer");
        // Container.innerHTML = ""; // Clear old cards
        const Card = document.createElement('div');
        Card.classList.add("Card");
        Card.dataset.id = Data.id;

        const TopData = document.createElement('div');
        TopData.classList.add("TopData");

        const Name = document.createElement('h3');
        Name.innerText = Data.name;
        TopData.appendChild(Name);

        const MiddleData = document.createElement('div');
        MiddleData.classList.add("MiddleData");

        const Table = document.createElement('table');


        const row2 = document.createElement('tr');
        const Role = document.createElement('td');
        Role.textContent = "Role";
        const RoleDetail = document.createElement('td');
        RoleDetail.textContent = Data.role;
        row2.appendChild(Role);
        row2.appendChild(RoleDetail);

        const row3 = document.createElement('tr');
        const Faculty = document.createElement('td');
        Faculty.textContent = "Faculty";
        const FacultyDetail = document.createElement('td');
        FacultyDetail.textContent = Data.faculty;
        row3.appendChild(Faculty);
        row3.appendChild(FacultyDetail);

        const row4 = document.createElement('tr');
        const Manager = document.createElement('td');
        Manager.textContent = "Supervisor";
        const ManagerDetail = document.createElement('td');
        ManagerDetail.textContent = Data.supervisor;
        row4.appendChild(Manager);
        row4.appendChild(ManagerDetail);

        Table.appendChild(row2);
        Table.appendChild(row3);
        Table.appendChild(row4);

        // const Email = document.createElement('p');
        // Email.textContent = 'Email@email.email';

        MiddleData.appendChild(Table);
        // MiddleData.appendChild(Email);

        const BottomData = document.createElement('div');
        BottomData.classList.add("BottomData");
        BottomData.innerHTML = `
    <a href="./Update/UpdateEmployee.php?id=${Data.id}">Edit</a>
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
    Employees.length > 0
        ? DisplayAll(Employees)
        : document.querySelector(".DataContainer").innerHTML = "No Employees";
</script>


</html>