<?php
session_start();
include 'db_connect.php';
// include 'admin_check.php'; // Uncomment this only if admin check is working correctly

$result = $conn->query("SELECT * FROM menu");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      padding: 30px;
    }

    h3 {
      text-align: center;
      color: #28a745;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    th, td {
      padding: 14px 16px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #28a745;
      color: white;
      font-weight: 600;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    td {
      color: #333;
      font-size: 15px;
    }

    .btn-danger {
      font-size: 14px;
      padding: 6px 12px;
    }

    .btn-success {
      font-size: 15px;
      padding: 8px 16px;
    }

    .text-end {
      text-align: right;
    }
  </style>
</head>
<body>

  <h3>Manage Menu</h3>

  <!-- Add New Dish Button -->
  <div class="mb-3 text-end">
    <a href="add_menu_item.php" class="btn btn-success">+ Add New Dish</a>
  </div>

  <!-- Menu Table -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Dish ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($dish = $result->fetch_assoc()) : ?>
      <tr>
        <td><?= $dish['id'] ?></td>
        <td><?= $dish['dish_name'] ?></td>
        <td><?= $dish['description'] ?></td>
        <td>₹<?= $dish['price'] ?></td>
        <td>
          <form action="delete_menu_item.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this dish?');">
            <input type="hidden" name="dish_id" value="<?= $dish['id'] ?>">
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</body>
</html>
