<?php
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone_number, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $phone, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful!";
        // Optionally redirect to login or profile
        // header("Location: login.php");
        // exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
