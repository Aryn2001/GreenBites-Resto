<?php
session_start();
echo '<pre>'; print_r($_SESSION); echo '</pre>';

include 'db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['dish_name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

     // Generate dish_code
     $result = $conn->query("SELECT MAX(id) AS max_id FROM menu");
     $row = $result->fetch_assoc();
     $nextId = $row['max_id'] + 1;
     $dishCode = "DISH-" . str_pad($nextId, 3, "0", STR_PAD_LEFT);

    $stmt = $conn->prepare("INSERT INTO menu (dish_name, description, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $desc, $price);

    if ($stmt->execute()) {
        header("Location: manage_menu.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
