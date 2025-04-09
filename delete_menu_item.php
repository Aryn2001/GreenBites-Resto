<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dish_id'])) {
    include 'db_connect.php';
    $dish_id = $_POST['dish_id'];

    $stmt = $conn->prepare("DELETE FROM menu WHERE id = ?");
    $stmt->bind_param("i", $dish_id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: manage_menu.php");
    exit();
}
?>
