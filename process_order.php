<?php
session_start();
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dish = $_POST['dish'];
    $quantity = $_POST['quantity'];

    // Optional: Check if user is logged in
    $user_id = $_SESSION['user_id'] ?? null;

    $stmt = $conn->prepare("INSERT INTO orders (user_id, dish_name, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $user_id, $dish, $quantity);

    if ($stmt->execute()) {
        echo "<script>alert('Order Submitted Successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
