<?php
session_start();
include 'db_connect.php';

// --- Admin Check ---
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || strtolower($_SESSION['role']) !== 'admin') {
    die("Access denied. Admins only.");
}
// -------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_dish'])) {
    // 1. Data Collection
    $dish_id = $_POST['dish_id'] ?? null;
    $dish_name = $_POST['dish_name'] ?? null;
    $dish_code = $_POST['dish_code'] ?? null;
    $category = $_POST['category'] ?? null;
    $description = $_POST['description'] ?? null;
    $price = $_POST['price'] ?? null;

    // Data validation
    if (empty($dish_id) || empty($dish_name) || empty($category) || empty($description) || empty($price) || empty($dish_code)) {
         // Agar koi field missing hai
         echo "<script>alert('Error: All fields are required for update.'); window.location.href='edit_menu_item.php?id=" . $dish_id . "';</script>";
         exit;
    }

    // 2. SQL UPDATE Query
    $sql = "UPDATE menu SET 
                dish_name = ?, 
                category = ?, 
                description = ?, 
                price = ?, 
                dish_code = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    
    // bind_param: s=string, d=decimal, i=integer (for ID)
    // Order: dish_name(s), category(s), description(s), price(d), dish_code(s), dish_id(i)
    $stmt->bind_param("sssdsi", $dish_name, $category, $description, $price, $dish_code, $dish_id);

    if ($stmt->execute()) {
        echo "<script>alert('Dish updated successfully!'); window.location.href='manage_menu.php';</script>";
    } else {
        echo "<script>alert('Error updating dish: " . $stmt->error . "'); window.location.href='manage_menu.php';</script>";
    }
    
    $stmt->close();
    $conn->close();

} else {
    // Agar direct URL access ho
    header("Location: manage_menu.php");
    exit();
}
?>