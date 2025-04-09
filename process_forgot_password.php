<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // Generate token

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        // Save token
        $update = $conn->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
        $update->bind_param("ss", $token, $email);
        $update->execute();

        // Simulate email with reset link
        echo "A reset link has been generated:<br>";
        echo "<a href='reset_password.php?token=$token'>Click here to reset password</a>";
    } else {
        echo "Email not found.";
    }
}
?>
