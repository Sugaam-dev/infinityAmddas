<?php
$servername = "sql113.infinityfree.com"; // Replace with your MySQL host
$username = "if0_36790755"; // Replace with your MySQL username
$password = "9937IUiTctYZO"; // Replace with your MySQL password
$dbname = "if0_36790755_usersdb"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


