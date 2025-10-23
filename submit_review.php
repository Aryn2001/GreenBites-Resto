<?php
// Database Connection
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize input
$dish = $conn->real_escape_string($_POST['dish']);
$rating = (int) $_POST['rating'];
$comment = $conn->real_escape_string($_POST['comment']);

// Insert into database
$sql = "INSERT INTO reviews (dish, rating, comment)
        VALUES ('$dish', $rating, '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Review submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
