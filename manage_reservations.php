<?php
// Ensure this file handles session start and admin role check
include 'admin_check.php'; 

$conn = new mysqli("localhost", "root", "Mysql@2025", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. UPDATED QUERY: Use JOIN to fetch the username associated with the user_id
$sql = "SELECT r.*, u.username AS user_account 
        FROM reservations r
        JOIN users u ON r.user_id = u.id
        ORDER BY r.reservation_date ASC";

$res = $conn->query($sql);

if (!$res) {
    die("Error retrieving reservations: " . $conn->error);
}

// Ensure the connection is closed after the query
$conn->close();
?>
<style>
  body {
  font-family: 'Segoe UI', sans-serif;
  background: #f9f9f9;
  padding: 30px;
}

h2 {
  text-align: center;
  color: #28a745;
  margin-bottom: 30px;
}

.table-responsive {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 15px;
  border-bottom: 1px solid #ddd;
  text-align: center;
  vertical-align: middle;
}

th {
  background-color: #28a745;
  color: white;
}

tr:hover {
  background-color: #f1f1f1;
}

.btn-delete {
  background-color: #dc3545;
  color: white;
  padding: 6px 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
}

.btn-delete:hover {
  background-color: #c82333;
}


</style>

<section class="container my-5">
    <h2 class="text-success mb-4 text-center">All Reservations</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>User Account</th> 
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guests</th>
                    <th>Name (Form)</th>
                    <th>Phone</th>
                    <th>Requests</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        
                        <td><?= htmlspecialchars($row['user_account']) ?></td> 
                        
                        <td><?= $row['reservation_date'] ?></td>
                        <td><?= $row['reservation_time'] ?></td>
                        <td><?= $row['party_size'] ?></td>
                        <td><?= $row['customer_name'] ?></td> 
                        <td><?= $row['contact_number'] ?></td>
                        <td><?= $row['special_requests'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td>
                            <form action="delete_reservation.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this reservation?');">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>
