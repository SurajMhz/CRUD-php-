<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../assets/css/AddEmp.css">
</head>

<body>
    <div class="Container">
        <form class="Form" name="Form" id="Form" action="Process.php" method="post" enctype="multipart/form-data">
            <h1 class="Top">Add New Employee</h1>

            <input class="InputBox" name="name" type="text" placeholder="Enter Employees Name" required> 
            <!--<input class="InputBox" name="Role" type="text" placeholder="Enter Employees Role"> -->
            <!-- <input class="InputBox" name="Faculty" type="text" placeholder="Enter Employees Faculty"> -->
             
            <input class="InputBox" name="supervisor" type="text" placeholder="Enter Employees Supervisor" required>
            <p>Select Faculty:</p>
            <div class="Radio">
                <label><input type="radio" name="faculty" value="javascript">javascript</label>
                <label><input type="radio" name="faculty" value="python">python</label>
                <label><input type="radio" name="faculty" value="java">java</label>
                <label><input type="radio" name="faculty" value="c">c</label>
            </div>
            <label class="Role"for="Role">Choose Role:
                <select id="Role" name="role" required>
                    <option value="" disabled selected hidden>-- Select One --</option>
                    <option value="Client_Handler">Client_Handler</option>
                    <option value="IT_Support">IT_Support</option>
                    <option value="Intern">Intern</option>
                    <option value="Coach">Coach</option>
                    <option value="Supervisor">Supervisor</option>
                </select>
            </label>
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
</body>


</html>