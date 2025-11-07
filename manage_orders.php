<?php
include("admin_check.php"); // Restricts access to admin only
$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. UPDATED QUERY: Use JOIN to fetch the username (u.username) associated with the order's user_id (o.user_id)
$sql = "SELECT o.*, u.username AS user_account 
        FROM orders o
        JOIN users u ON o.user_id = u.id 
        ORDER BY o.order_time DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Error retrieving orders: " . $conn->error);
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Orders</title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional external CSS -->
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      padding: 30px;
    }

    h2 {
      text-align: center;
      color: #28a745;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 15px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #28a745;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .btn-delete {
      background-color: #dc3545;
      color: white;
      padding: 5px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-delete:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
<h2>Manage Orders</h2>

<?php if ($result->num_rows > 0): ?>
<table>
  <tr>
    <th>ID</th>
    <th>User Account</th> 
    <th>Dish</th>
    <th>Quantity</th>
    <th>Order Time</th>
    <th>Action</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['user_account']) ?></td> 
      <td><?= htmlspecialchars($row['dish_name']) ?></td>
      <td><?= $row['quantity'] ?></td>
      <td><?= $row['order_time'] ?></td>
      <td>
        <form method="POST" action="delete_order.php" onsubmit="return confirm('Are you sure you want to delete this order?');">
          <input type="hidden" name="order_id" value="<?= $row['id'] ?>">
          <button type="submit" class="btn-delete">Delete</button>
        </form>
      </td>
    </tr>
  <?php endwhile; ?>
</table>
<?php else: ?>
  <p style="text-align: center;">No orders found.</p>
<?php endif; ?>

</body>
</html>