<?php
// Database configuration
$host = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$dbname = "birth_registration"; // Name of your database

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$childName = $_POST['childName'];
$birthDate = $_POST['birthDate'];
$birthPlace = $_POST['birthPlace'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];

// Insert data into database
$sql = "INSERT INTO registrations (child_name, birth_date, birth_place, father_name, mother_name) VALUES ('$childName', '$birthDate', '$birthPlace', '$fatherName', '$motherName')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
