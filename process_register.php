<?php
// Establish Database Connection (Line 2)
// NOTE: Change "Mysql@2024" to your actual password if this is not it.
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    // ------------------------------------------------------------------
    // 1. DATA VALIDATION: CHECK FOR DUPLICATES (The Fix)
    // ------------------------------------------------------------------
    $check_stmt = $conn->prepare("SELECT username, email FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // A match was found (username OR email already exists)
        echo "Registration failed: A user with this username or email already exists. Please try logging in.";
        $check_stmt->close();
        $conn->close();
        exit(); // Stop execution
    }
    
    $check_stmt->close();
    // ------------------------------------------------------------------
    
    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // ------------------------------------------------------------------
    // 2. DATA INSERTION (Your original logic, now safer)
    // ------------------------------------------------------------------
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone_number, password) VALUES (?, ?, ?, ?)");
    // The bind_param takes: s (string) for username, email, phone, and hashed password.
    $stmt->bind_param("ssss", $username, $email, $phone, $hashedPassword);

    // Execution is now on line 37 (was line 17 in original, now protected by the check)
    if ($stmt->execute()) {
        echo "Registration successful! You can now log in.";
        // header("Location: login.php");
        // exit();
    } else {
        // This 'else' catches any *other* SQL errors (e.g., table name typo)
        echo "An unexpected error occurred during registration: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>