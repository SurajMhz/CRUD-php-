<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="AddEmp.css">
</head>

<body>
    <div class="Container">
        <form class="Form" name="Form" id="Form" action="Process.php" method="post" enctype="multipart/form-data">
            <h1 class="Top">Add New Employee</h1>

            <input class="InputBox" name="Name" type="text" placeholder="Enter Employees Name" required> 
            <!--<input class="InputBox" name="Role" type="text" placeholder="Enter Employees Role"> -->
            <!-- <input class="InputBox" name="Faculty" type="text" placeholder="Enter Employees Faculty"> -->
             
            <input class="InputBox" name="Manager" type="text" placeholder="Enter Employees Supervisor" required>

            <p>Select Faculty:</p>
            <div class="Radio">
                <label><input type="radio" name="Faculty" value="javascript">Intern</label>
                <label><input type="radio" name="Faculty" value="python">FrontEnd</label>
                <label><input type="radio" name="Faculty" value="java">BackEnd</label>
                <label><input type="radio" name="Faculty" value="c">IT-Support</label>
            </div>
            <label class="Role"for="Role">Choose Role:
                <select id="Role" name="Role" required>
                    <option value="" disabled selected hidden>-- Select One --</option>
                    <option value="Client_Handler">Client_Handler</option>
                    <option value="IT_Support">IT_Support</option>
                    <option value="Inter">Intern</option>
                    <option value="Coach">Coach</option>
                    <option value="Supervisor">Supervisor</option>
                </select>
            </label>
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
</body>


</html>