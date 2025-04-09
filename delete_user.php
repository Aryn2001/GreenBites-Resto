<?php
include 'db_connect.php'; // ✅ This will work now since the connection is cleaned up

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        header("Location: manage_users.php?deleted=1");
        exit;
    } else {
        echo "Error deleting user.";
    }

    $stmt->close();
    $conn->close();
}
?>
