<?php

// --- CREDENTIALS UPDATED FOR 'hotel' DATABASE ---
// Host: localhost
// User: root
// Pass: Mysql@2025
// DB Name: hotel
define('DB_HOST', 'localhost');      
define('DB_USER', 'root');           
define('DB_PASS', 'Mysql@2025');      
define('DB_NAME', 'hotel'); // *** CORRECTED: Using 'hotel' database name ***
// -------------------------------------------------

// 1. Check if the request is a POST submission from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Collect and sanitize form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message_type = trim($_POST['message_type']);
    $message = trim($_POST['message']);

    // Basic Input Validation
    if (empty($name) || empty($email) || empty($message) || empty($message_type)) {
        // Redirect back to contact.php with an error status
        header("Location: contact.php?status=error&message=All fields are required.");
        exit;
    }

    // 3. Establish MySQL Database connection
    // This line uses the constants defined above: DB_HOST, DB_USER, DB_PASS, DB_NAME
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection for errors
    if ($conn->connect_error) {
        // Log the detailed error for server administrator review
        error_log("MySQL Connection failed: " . $conn->connect_error);
        // Redirect with a generic, non-specific error message for the end user
        header("Location: contact.php?status=error&message=Server error: Database connection failed.");
        exit;
    }

    // 4. Prepare the SQL INSERT statement using a prepared statement (mandatory for security)
    $sql = "INSERT INTO contact_messages (name, email, message_type, message) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    // Bind the variables: four strings (s)
    $stmt->bind_param("ssss", $name, $email, $message_type, $message);

    // 5. Execute the statement
    if ($stmt->execute()) {
        // Success: Redirect back to contact.php
        header("Location: contact.php?status=success");
    } else {
        // Failure (e.g., table doesn't exist, data too long)
        error_log("Error executing query: " . $stmt->error);
        header("Location: contact.php?status=error&message=Failed to save message due to database error.");
    }

    // 6. Close resources
    $stmt->close();
    $conn->close();
    
} else {
    // If accessed directly (not via form submission), redirect to the contact form
    header("Location: contact.php");
    exit;
}
?>
