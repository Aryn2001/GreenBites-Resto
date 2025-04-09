<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    die("Please login to view your order history.");
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT dish_name, quantity, order_time FROM orders WHERE user_id = ? ORDER BY order_time DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Your Order History</h2>

    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-success">
                <tr>
                    <th>Dish Name</th>
                    <th>Quantity</th>
                    <th>Order Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['dish_name']) ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><?= date("d M Y, h:i A", strtotime($row['order_time'])) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">You haven’t placed any orders yet.</div>
    <?php endif; ?>
</div>
</body>
</html>
