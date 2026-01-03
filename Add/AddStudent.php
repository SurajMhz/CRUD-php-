<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../assets/css/AddStudent.css">
</head>

<body>
    <div class="Container">
        <form class="Form" name="Form" id="Form" action="Process.php" method="post" enctype="multipart/form-data">
            <h1 class="Top">Add New Student</h1>

            <input type="text" class="InputBox" name="Fname" placeholder="Enter Students First Name" required>
            <input type="text" class="InputBox" name="Lname" placeholder="Enter Students Last Name" required>
            <input class="InputBox" name="email" type="email" placeholder="Enter Students Email" required>
            <input class="InputBox" name="dob" type="text" placeholder="Date Of Birth" required>
            <p>Select Gender:</p>
            <div class="Radio">
                <label><input type="radio" name="Gender" value="Male" required>Male</label>
                <label><input type="radio" name="Gender" value="Female">Female</label>
                <label><input type="radio" name="Gender" value="others">others</label>
            </div>
            <input type="number" class="InputBox" name="phone" placeholder="Enter Students Phone Number" required>
            <input type="text" placeholder="Hobbies-Optional" class="InputBox" name="hobbies">
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
</body>


</html>