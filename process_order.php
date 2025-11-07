<?php
session_start();
$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dish = $_POST['dish'];
    $quantity = $_POST['quantity'];

    // Optional: Check if user is logged in
    $user_id = $_SESSION['user_id'] ?? null;

   // ✅ Updated SQL query
    $stmt = $conn->prepare("INSERT INTO orders (user_id, dish_name, quantity, address, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiss", $user_id, $dish, $quantity, $address, $phone);

    if ($stmt->execute()) {
        echo "<script>alert('Order Submitted Successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
