<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginEmail = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $stmt = $conn->prepare("SELECT id, username, phone_number, email, password, role FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $loginEmail, $loginEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            // Store all needed data in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone_number'] = $user['phone_number'];
            $_SESSION['role'] = $user['role']; // <- make sure this exists in your DB

            if ($user['role'] === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: profile.php");
            }
            exit;
        } else {
            header("Location: login.php?error=1");
        }
    } else {
        header("Location: login.php?error=1");
    }
}
?>
