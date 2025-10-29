<?php
session_start();
include 'db_connect.php';

// --- Admin Check ---
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || strtolower($_SESSION['role']) !== 'admin') {
    // die("Access denied. Admins only."); // Uncomment for production
}
// -------------------

// 1. Filter Logic
$filter_category = $_GET['category'] ?? ''; // URL se category filter lo (default: '')
$where_clause = '';

if (!empty($filter_category)) {
    // Agar koi category select ki gayi hai, toh WHERE clause add karo
    $where_clause = " WHERE category = '" . $conn->real_escape_string($filter_category) . "'";
}

// 2. Fetch Data with Filter
// Note: Saare columns fetch ho rahe hain aur ORDER BY category, dish_name
$sql = "SELECT id, dish_code, dish_name, category, description, price FROM menu" . $where_clause . " ORDER BY dish_name";

$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}

// Category options jo aapke database mein hain
$categories = [
    'main-course' => 'Main Course',
    'starter' => 'Starters & Snacks',
    'chinese' => 'Indo-Chinese',
    'rice-noodle' => 'Rice & Noodles',
    'indian-bread' => 'Indian Breads',
    'beverage' => 'Beverages (Drinks)',
    'sides-salad' => 'Sides & Salads'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Cleaned up and Centered */
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background: #f9f9f9; 
            /* Removed fixed padding from body to let container handle it */
        }
        /* Centering the heading and increasing size */
        .admin-heading { 
            text-align: center; 
            color: #28a745; 
            margin-top: 15px; /* Reduced margin-top for tighter fit */
            margin-bottom: 20px; /* Reduced margin-bottom for tighter fit */
            font-weight: 700;
            font-size: 2.5rem;
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
            padding: 14px 10px; 
            border-bottom: 1px solid #ddd; 
            text-align: center; 
            vertical-align: middle; 
        }
        th { 
            background-color: #28a745; 
            color: white; 
            font-weight: 600; 
            white-space: nowrap; 
        }
        .description-cell { 
            text-align: left; 
            max-width: 250px; 
            font-size: 14px; 
        }
    </style>
</head>
<body>

<!-- FIX: py-4 reduced to py-3 for less vertical padding -->
<div class="container py-3"> 
    <!-- Centered Heading (Used h2 and custom class for visual appeal) -->
    <h2 class="admin-heading">Manage Menu</h2>

    <!-- Control Row: mb-3 reduced to mb-2 for tighter fit before the table -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        
        <!-- Filter Form (Kept the functionality) -->
        <form method="GET" action="manage_menu.php" class="d-flex align-items-center">
            <label for="category-filter" class="form-label mb-0 me-2">Filter by Category:</label>
            <select class="form-select me-2" id="category-filter" name="category" onchange="this.form.submit()" style="min-width: 200px;">
                <option value="" <?= empty($filter_category) ? 'selected' : '' ?>>-- Show All Dishes --</option>
                <?php foreach ($categories as $value => $label) : ?>
                    <option value="<?= htmlspecialchars($value) ?>" <?= ($filter_category === $value) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($label) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-info btn-sm">Filter</button>
        </form>
        
        <!-- Add New Dish Button -->
        <a href="add_menu_item.php" class="btn btn-success">+ Add New Dish</a>
    </div>
    
    <!-- Menu Table -->
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Code</th> 
        <th>Name</th>
        <th>Category</th> 
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($dish = $result->fetch_assoc()) : ?>
      <tr>
        <td><?= htmlspecialchars($dish['id']) ?></td>
        <td><?= htmlspecialchars($dish['dish_code'] ?? 'N/A') ?></td> 
        <td><?= htmlspecialchars($dish['dish_name']) ?></td>
        <td><?= htmlspecialchars($categories[$dish['category']] ?? $dish['category']) ?></td>         
        <td class="description-cell"><?= htmlspecialchars(substr($dish['description'], 0, 70)) ?>...</td> 
        <td>₹<?= number_format($dish['price'] ?? 0, 2) ?></td>
        <td class="btn-action-group">
          <a href="edit_menu_item.php?id=<?= $dish['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
          <form action="delete_menu_item.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this dish?');" style="display:inline-block; margin-left: 5px;">
            <input type="hidden" name="dish_id" value="<?= $dish['id'] ?>">
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</div> <!-- Closing container div -->

</body>
</html>
