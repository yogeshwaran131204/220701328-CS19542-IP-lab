<?php
include "add.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $roll_no = $_POST['rollno'];  // Handle missing values safely
        $cs19501 = $_POST['cs19501'] ;
        $cs19541 = $_POST['cs19541'] ;
        $cs19542 = $_POST['cs19542'];
        $ai19341 = $_POST['ai19341'] ;
        $oa1903 = $_POST['oa1903'];
        
        // $atype=$_POST["atype"];
        
        

            $sql="insert into attendance1(roll_no,cs19501,cs19541,cs19542,ai19341,oa1903) values('$roll_no','$cs19501','$cs19541','$cs19541','$ai19341','$oa1903')";
            if($db->query($sql)===TRUE){
                echo "<script> alert(Attendance  will be recorded  successfully)</script>";
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
    <title>Attendance Form</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body class="one2">
    <div class="container2">
        <h2>Attendance Entry</h2>
        <form id="attendanceForm" action="att.php" method="POST">
            <label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno" placeholder="Enter roll number" required pattern="^[0-9]{6,10}$" title="Roll number must be 6 to 10 digits long.">

            <label for="cs19501">CS19501 Attendance (%):</label>
            <input type="number" id="cs19501" name="cs19501" placeholder="Enter attendance for CS19501" min="0" max="100" required>

            <label for="cs19541">CS19541 Attendance (%):</label>
            <input type="number" id="cs19541" name="cs19541" placeholder="Enter attendance for CS19541" min="0" max="100" required>

            <label for="cs19542">CS19542 Attendance (%):</label>
            <input type="number" id="cs19542" name="cs19542" placeholder="Enter attendance for CS19542" min="0" max="100" required>

            <label for="ai19341">AI19341 Attendance (%):</label>
            <input type="number" id="ai19341" name="ai19341" placeholder="Enter attendance for AI19341" min="0" max="100" required>

            <label for="oa1903">OA1903 Attendance (%):</label>
            <input type="number" id="oa1903" name="oa1903" placeholder="Enter attendance for OA1903" min="0" max="100" required>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
