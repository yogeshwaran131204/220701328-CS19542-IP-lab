<?php
include "add.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];
        $roll_no = $_POST['rollno'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $sem=$_POST['sem'];
        $year=$_POST['year'];
        $department=$_POST['department'];
        $passingYear=$_POST['passingYear'];
        $arrears=$_POST['arrears'];
          // Handle missing values safely
        
        
        // $atype=$_POST["atype"];
        
        

            $sql="insert into mar1(Name,roll_no,email,dob,phone,sem,year,department,passingYear,arrears) values('$name',$roll_no','$email','$dob','$phone','$sem','$year','$department','$passingYear','$arrears')";
            if($db->query($sql)===TRUE){
                echo "<script> alert(Marks will be recorded  successfully)</script>";
            }
            else    
                echo "Error: " . $sql . "<br>" . $db->error;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page with Validation</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Profile Form</h2>
        <form id="profileForm" action="pro.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="^[A-Za-z\s]+$" title="Name should only contain letters and spaces.">

            <label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno" placeholder="Enter roll number" required pattern="^[0-9]{6,10}$" title="Roll number must be 6 to 10 digits long.">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required title="Phone number must be 10 digits long.">

            <label for="sem">Semester:</label>
            <input type="number" id="sem" name="sem" placeholder="Enter current semester" min="1" max="8" required>

            <label for="year">Year:</label>
            <input type="number" id="year" name="year" placeholder="Enter current year" min="1" max="4" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" placeholder="Enter your department" required pattern="^[A-Za-z\s]+$" title="Department should only contain letters and spaces.">

            <label for="passingYear">Year of Passing:</label>
            <input type="number" id="passingYear" name="passingYear" placeholder="Enter year of passing" required>

            <label for="arrears">Number of Arrears:</label>
            <input type="number" id="arrears" name="arrears" placeholder="Enter number of arrears" min="0" required>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
