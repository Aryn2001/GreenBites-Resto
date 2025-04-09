<?php
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];
$party_size = $_POST['party_size'];
$customer_name = $_POST['customer_name'];
$contact_number = $_POST['contact_number'];
$special_requests = $_POST['special_requests'];

$stmt = $conn->prepare("INSERT INTO reservations (reservation_date, reservation_time, party_size, customer_name, contact_number, special_requests) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisss", $reservation_date, $reservation_time, $party_size, $customer_name, $contact_number, $special_requests);

if ($stmt->execute()) {
    echo "<script>alert('Reservation Successful!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
