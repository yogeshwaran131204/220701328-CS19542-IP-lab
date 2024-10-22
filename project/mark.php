?php
// Database connection details
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "mysql";

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching data from the form
    $rollno = $_POST['rollno'];
    $cs19501 = $_POST['cs19501'];
    $cs19541 = $_POST['cs19541'];
    $cs19542 = $_POST['cs19542'];
    $ai19341 = $_POST['ai19341'];

    // Prepare the SQL query
    $sql = "INSERT INTO marks (rollno, cs19501, cs19541, cs19542, ai19341) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siiii", $rollno, $cs19501, $cs19541, $cs19542, $ai19341);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script> alert('marks entered successfully');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>