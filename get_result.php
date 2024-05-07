<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "exam_results";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registerNumber = $_POST['registerNumber'];

$sql = "SELECT * FROM results WHERE register_number = '$registerNumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Student Name: " . $row["student_name"]. " - Subject: " . $row["subject"]. " - Marks: " . $row["marks"]. "<br>";
    }
} else {
    echo "No results found for the entered register number.";
}

$conn->close();
?>