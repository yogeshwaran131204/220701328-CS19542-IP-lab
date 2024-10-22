<?php
include "add.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $roll_no = $_POST['rollno'];  // Handle missing values safely
        $cs19501 = $_POST['cs19501'] ;
        $cs19541 = $_POST['cs19541'] ;
        $cs19542 = $_POST['cs19542'];
        $ai19341 = $_POST['ai19341'] ;
        
        
        // $atype=$_POST["atype"];
        
        

            $sql="insert into marks(roll_no,cs19501,cs19541,cs19542,ai19341) values('$roll_no','$cs19501','$cs19541','$cs19541','$ai19341')";
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
    <title>Internal Marks Form</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body class="one">
    <div class="container1">
        <h2>Internal Marks Entry</h2>
        <form id="marksForm" action="int.php" method="POST">
            <label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno" placeholder="Enter roll number" required pattern="^[0-9]{6,10}$" title="Roll number must be 6 to 10 digits long.">

            <label for="cs19501">CS19501 Marks:</label>
            <input type="number" id="cs19501" name="cs19501" placeholder="Enter marks for CS19501" min="0" max="75" required>

            <label for="cs19541">CS19541 Marks:</label>
            <input type="number" id="cs19541" name="cs19541" placeholder="Enter marks for CS19541" min="0" max="75" required>

            <label for="cs19542">CS19542 Marks:</label>
            <input type="number" id="cs19542" name="cs19542" placeholder="Enter marks for CS19542" min="0" max="75" required>

            <label for="ai19341">AI19341 Marks:</label>
            <input type="number" id="ai19341" name="ai19341" placeholder="Enter marks for AI19341" min="0" max="75" required>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
