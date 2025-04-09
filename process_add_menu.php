<?php
session_start();
include 'db_connect.php';

// Admin check again
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = floatval($_POST['price']);

    $stmt = $conn->prepare("INSERT INTO menu (name, description, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $description, $price);

    if ($stmt->execute()) {
        header("Location: manage_menu.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
