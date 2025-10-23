<?php
session_start(); // Start the session to access $_SESSION variables

// 1. SECURITY CHECK: Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect or display an error if the user ID is missing
    die("Error: User must be logged in to make a reservation.");
    // header("Location: login.php");
    // exit();
}

// Get the user ID from the session (This is the crucial change)
$user_id = $_SESSION['user_id']; 

$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Data Retrieval (No change here, looks correct)
$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];
$party_size = $_POST['party_size'];
$customer_name = $_POST['customer_name'];
$contact_number = $_POST['contact_number'];
$special_requests = $_POST['special_requests'];


// 3. SQL Query and Bind Parameters Update

// A. Update the INSERT statement to include 'user_id' 👈 NEW COLUMN ADDED
$stmt = $conn->prepare("INSERT INTO reservations (user_id, reservation_date, reservation_time, party_size, customer_name, contact_number, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");

// B. Update bind_param to include the user_id: 'i' for integer, followed by the rest.
// Old: "ssisss" (6 parameters)
// New: "isssiss" (7 parameters: i=user_id, s=date, s=time, i=party_size, s=name, s=phone, s=requests)
$stmt->bind_param("isissis", $user_id, $reservation_date, $reservation_time, $party_size, $customer_name, $contact_number, $special_requests);

if ($stmt->execute()) {
    echo "<script>alert('Reservation Successful!'); window.location.href='index.php';</script>";
} else {
    echo "Error executing reservation query: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>