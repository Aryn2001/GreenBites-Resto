<?php
include("admin_check.php");
$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order_id'])) {
    $id = intval($_POST['order_id']);
    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: manage_orders.php");
exit;
?>
