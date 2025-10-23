<?php
session_start();
// echo '<pre>'; print_r($_SESSION); echo '</pre>'; // Debugging line

include 'db_connect.php';

// --- Admin Check ---
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || strtolower($_SESSION['role']) !== 'admin') {
    die("Access denied. Admins only.");
}
// -------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Data Collection from POST (Variable Consistency: Sabhi form data collect karein)
    $dish_name = $_POST['dish_name'] ?? null;
    $dish_code = $_POST['dish_code'] ?? null; 
    $description = $_POST['description'] ?? null; // CRITICAL FIX: Direct use $description
    $price = $_POST['price'] ?? null;
    $category = $_POST['category'] ?? null;
    
    // 2. Dish Code Generation Logic REMOVED/IGNORED
    // Aap form se $dish_code le rahe hain, isliye yeh automatic generation code ab unnecessary hai:
    /*
     $result = $conn->query("SELECT MAX(id) AS max_id FROM menu");
     $row = $result->fetch_assoc();
     $nextId = $row['max_id'] + 1;
     $dishCode = "DISH-" . str_pad($nextId, 3, "0", STR_PAD_LEFT);
    */

    // 3. Validation: Check karein ki koi field empty toh nahi hai
    if (empty($dish_name) || empty($category) || empty($description) || empty($price) || empty($dish_code)) {
        // Agar form se data NULL/Empty aata hai, toh user ko batayein
         die("Error: All required menu fields (Name, Category, Description, Price, Code) must be filled. Check your form input names.");
    }
    
    // 4. SQL INSERT Query (Values ka order bind_param se match hona chahiye)
    $stmt = $conn->prepare("INSERT INTO menu (dish_name, category, description, price, dish_code) 
                            VALUES (?, ?, ?, ?, ?)");
    
    // 5. bind_param: s=string, d=decimal (Corrected variable usage)
    // Order: dish_name(s), category(s), description(s), price(d), dish_code(s)
    // CRITICAL FIX: Description ke liye $description variable use kiya gaya hai.
    $stmt->bind_param("sssds", $dish_name, $category, $description, $price, $dish_code);

    if ($stmt->execute()) {
        header("Location: manage_menu.php");
        exit;
    } else {
        // Database execution error check
        echo "Database Error: " . $stmt->error;
    }
    
    $stmt->close();
    // Database connection ko bhi close karna theek rehta hai
    $conn->close();

} else {
    // Agar direct access kiya gaya ho
    die("Invalid request method.");
}
?>