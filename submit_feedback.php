<?php
// Database Connection
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$rating = (int) $_POST['rating'];
$comments = $conn->real_escape_string($_POST['comments']);

// Insert into database
$sql = "INSERT INTO feedback (name, email, rating, comments)
        VALUES ('$name', '$email', $rating, '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
