<?php
session_start();
$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user role
$userId = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT role FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Fetch once and reuse
    if ($row['role'] !== 'admin') {
        echo "<h2 style='color:red; text-align:center;'>Access Denied. Admins only.</h2>";
        exit();
    }
} else {
    echo "<h2 style='color:red; text-align:center;'>User not found.</h2>";
    exit();
}
?>

<!-- admin email - aryn123@gmail.com, username - Aryn20012, pswrd - aryn2001 -->
