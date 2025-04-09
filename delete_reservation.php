<?php
include 'db_connect.php'; // or whatever your DB file is named

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $conn->prepare("DELETE FROM reservations WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: manage_reservations.php?msg=deleted");
    } else {
        echo "Error deleting reservation.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
