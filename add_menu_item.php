<?php
session_start();
include 'db_connect.php';

// Check if logged in and is admin
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || strtolower($_SESSION['role']) !== 'admin') {
  print_r($_SESSION['user_id']);
echo $_SESSION['role'];
    die("Access denied. Admins only.");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add New Dish</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      padding: 40px;
    }
    .form-container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #28a745;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <form action="save_menu_item.php" method="POST" enctype="multipart/form-data">
      
              <div class="mb-3">
        <label for="dish_name" class="form-label">Dish Name</label>
        <input type="text" class="form-control" id="dish_name" name="dish_name" required>
      </div>
        
        <div class="mb-3">
          <label for="dish_code" class="form-label">Dish Code (e.g., PBM01)</label>
          <input type="text" class="form-control" id="dish_code" name="dish_code" maxlength="20" required>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category Chunein</label>
          <select class="form-select" id="category" name="category" required>
            <option value="">-- Category Select Karein --</option>
            <option value="main-course">Main Course (North Indian)</option>
            <option value="chinese">Indo-Chinese</option>
            <option value="rice-noodle">Rice & Noodles</option>
            <option value="starter">Starters & Snacks</option>
            <option value="indian-bread">Indian Breads</option>
            <option value="beverage">Beverages (Drinks)</option>
            <option value="sides-salad">Sides & Salads</option>
          </select>
        </div>
        
              <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>

              <div class="mb-3">
        <label for="price" class="form-label">Price (₹)</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
        
      <div class="text-end">
        <button type="submit" name="add_dish" class="btn btn-success">Add Dish</button>
      </div>
    </form>
  </div>
</body>
</html>
