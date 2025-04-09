<?php
include("admin_check.php"); // Restricts access to admin only
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

// Fetch orders
$result = $conn->query("SELECT * FROM orders ORDER BY order_time DESC");
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
    <th>User ID</th>
    <th>Dish</th>
    <th>Quantity</th>
    <th>Order Time</th>
    <th>Action</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['user_id'] ?? 'Guest' ?></td>
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
