<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $token = $_POST['token'];
    $newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT id FROM users WHERE reset_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        $update = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL WHERE reset_token = ?");
        $update->bind_param("ss", $newPassword, $token);
        $update->execute();

        echo "Password updated successfully. <a href='login.php'>Login</a>";
    } else {
        echo "Invalid or expired token.";
    }
}
?>
