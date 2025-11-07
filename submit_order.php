<?php
$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dish_id = $_POST['dish_id'];
$quantity = $_POST['quantity'];

// Insert Order into Orders Table
$sql = "INSERT INTO orders (dish_id, quantity) VALUES ('$dish_id', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Order placed successfully!'); window.location.href='order.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
