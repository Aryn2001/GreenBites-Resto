<?php
session_start();
include 'db_connect.php';

// --- Admin Check ---
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || strtolower($_SESSION['role']) !== 'admin') {
    die("Access denied. Admins only.");
}

// 1. URL se Dish ID lo
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Dish ID not specified.");
}

$dish_id = $_GET['id'];

// 2. Database se dish ka data load karo
// Aapki menu table mein ab category aur dish_code dono hain
$sql = "SELECT id, dish_name, category, description, price, dish_code FROM menu WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $dish_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Dish not found.");
}

$dish = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Dish: <?= htmlspecialchars($dish['dish_name']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* (CSS styles copied from previous response) */
    body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; }
    .form-container { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    h2 { color: #007bff; text-align: center; margin-bottom: 30px; }
    .form-container button[type="submit"] { width: 100%; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit Dish: <?= htmlspecialchars($dish['dish_name']) ?></h2>
    
        <form action="update_menu_item.php" method="POST">
        <input type="hidden" name="dish_id" value="<?= htmlspecialchars($dish['id']) ?>">
        
              <div class="mb-3">
        <label for="dish_name" class="form-label">Dish Ka Naam</label>
        <input type="text" class="form-control" id="dish_name" name="dish_name" value="<?= htmlspecialchars($dish['dish_name']) ?>" required>
      </div>

        <div class="mb-3">
          <label for="dish_code" class="form-label">Dish Code</label>
          <input type="text" class="form-control" id="dish_code" name="dish_code" value="<?= htmlspecialchars($dish['dish_code']) ?>" required>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category Chunein</label>
          <select class="form-select" id="category" name="category" required>
            <option value="">-- Category Select Karein --</option>
            <option value="main-course" <?= ($dish['category'] === 'main-course') ? 'selected' : '' ?>>Main Course (North Indian)</option>
            <option value="chinese" <?= ($dish['category'] === 'chinese') ? 'selected' : '' ?>>Indo-Chinese</option>
            <option value="rice-noodle" <?= ($dish['category'] === 'rice-noodle') ? 'selected' : '' ?>>Rice & Noodles</option>
            <option value="starter" <?= ($dish['category'] === 'starter') ? 'selected' : '' ?>>Starters & Snacks</option>
            <option value="indian-bread" <?= ($dish['category'] === 'indian-bread') ? 'selected' : '' ?>>Indian Breads</option>
            <option value="beverage" <?= ($dish['category'] === 'beverage') ? 'selected' : '' ?>>Beverages (Drinks)</option>
            <option value="sides-salad" <?= ($dish['category'] === 'sides-salad') ? 'selected' : '' ?>>Sides & Salads</option>
          </select>
        </div>
        
              <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required><?= htmlspecialchars($dish['description']) ?></textarea>
      </div>

              <div class="mb-3">
        <label for="price" class="form-label">Price (₹)</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?= htmlspecialchars($dish['price']) ?>" required>
      </div>
        
      <div class="d-grid gap-2">
        <button type="submit" name="update_dish" class="btn btn-primary">Update Dish Details</button>
        <a href="manage_menu.php" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>