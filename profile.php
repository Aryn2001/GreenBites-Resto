<?php
session_start();
// Check if the user is logged in AND the user_id is set
if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// -----------------------------------------------------------
// 1. PHP LOGIC TO FETCH USER DATA
// -----------------------------------------------------------

// Include the database connection file (Assuming db_connect.php exists)
include 'db_connect.php'; 

if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id']; 

// --- FETCH RESERVATIONS ---
$reservations_data = [];
// party_size is used as confirmed by your schema
$stmt_res = $conn->prepare("SELECT reservation_date, reservation_time, party_size, special_requests FROM reservations WHERE user_id = ? ORDER BY reservation_date DESC LIMIT 5");
$stmt_res->bind_param("i", $user_id);
$stmt_res->execute();
$result_res = $stmt_res->get_result();
while ($row = $result_res->fetch_assoc()) {
    $reservations_data[] = $row;
}
$stmt_res->close();

// --- FETCH ORDERS ---
$orders_data = [];
// dish_name, quantity, order_time are used based on your schema
$stmt_ord = $conn->prepare("SELECT dish_name, quantity, order_time FROM orders WHERE user_id = ? ORDER BY order_time DESC LIMIT 5");
$stmt_ord->bind_param("i", $user_id);
$stmt_ord->execute();
$result_ord = $stmt_ord->get_result();
while ($row = $result_ord->fetch_assoc()) {
    $orders_data[] = $row;
}
$stmt_ord->close();

$conn->close();

// -----------------------------------------------------------
// END PHP LOGIC
// -----------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="profile.css">

    <script src="js/script.js" defer></script>

    <style>
/* Footer styles (your existing footer CSS) */
.footer {
    background: #2c3e50;
    color: white;
    padding: 40px 0;
    text-align: center;
}
.containerf {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}
.footer-box {
    width: 250px;
    margin-bottom: 20px;
}
.footer-box h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #f39c12;
    text-transform: uppercase;
}
.footer-box a {
    display: block;
    color: #ccc;
    text-decoration: none;
    margin: 8px 0;
    transition: 0.3s;
}
.footer-box a i {
    margin-right: 10px;
    color: #f39c12;
}
.footer-box a:hover {
    color: #f39c12;
}
.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    border-top: 1px solid #444;
    padding-top: 10px;
}

/* Profile styles (your existing profile CSS) */
.profile-container {
    max-width: 600px;
    margin: 80px auto;
    background-color: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 12px 24px rgba(0,0,0,0.8);
}
.profile-container h2 {
    text-align: center;
    font-size: 2.2rem;
    color: #28a745;
    margin-bottom: 25px;
}
.profile-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.profile-info label {
    font-weight: 600; color: #6c757d;
    margin-bottom: 6px;
}
.profile-info .info-box {
    background-color: #f8f9fa;
    padding: 12px 16px;
    border-radius: 8px; border: 1px solid #e9ecef;
    color: #333;
    font-size: 16px;
}
.logout-btn {
    display: block;
    width: 100%;
    padding: 14px;
    margin-top: 30px;
    border: none;
    background-color: #28a745;
    color: white;
    font-weight: bold;
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.logout-btn:hover {
    background-color: #218838;
}

/* NEW: Styles for History Tables to make them look good */
.history-section {
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}
.history-section h3 {
    color: #2e7d32; font-weight: 600;
    font-size: 1.5rem;
    margin-bottom: 15px;
}
.history-table {
    font-size: 0.9rem;
    border-radius: 5px;
    overflow: hidden; border: none; border-collapse: collapse;
}

.history-table tbody tr td {
    border-top: 1px solid #f1f1f1;
}

.history-table thead th {
    background-color: #f3f3f3;
    color: #333;
    font-weight: 600;
}
.history-table tbody tr:hover {
    background-color: #f7fcf9;
}
    </style>
</head>
<body>

 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold text-uppercase" href="index.php">
      <i class="bi bi-egg-fried me-2"></i>Green Bites
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="order.php">Order</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="offers.php">Offers</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="reservation.php">Reserve</a></li>
        <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="profile-container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

    <div class="profile-info">
        <div>
            <label>Email:</label>
            <div class="info-box"><?php echo htmlspecialchars($_SESSION['email']); ?></div>
        </div>
        <div>
            <label>Phone Number:</label>
            <div class="info-box"><?php echo htmlspecialchars($_SESSION['phone_number']); ?></div>
        </div>
    </div>
    
    <div class="history-section">
        
        <h3 class="mb-3">Recent Reservations</h3>
        <?php if (count($reservations_data) > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped history-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guests</th>
                        <th>Requests</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservations_data as $reservation): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($reservation['reservation_date']); ?></td>
                        <td><?php echo htmlspecialchars($reservation['reservation_time']); ?></td>
                        <td><?php echo htmlspecialchars($reservation['party_size']); ?></td>
                        <td><?php echo htmlspecialchars($reservation['special_requests']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <p class="text-muted">You have no recent reservations.</p>
        <?php endif; ?>

        <h3 class="mb-3 mt-4">Recent Food Orders</h3>
        <?php if (count($orders_data) > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped history-table">
                <thead>
                    <tr>
                        <th>Dish Name</th>
                        <th>Qty</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders_data as $order): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($order['dish_name']); ?></td>
                        <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($order['order_time']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <p class="text-muted">You have no recent food orders.</p>
        <?php endif; ?>

    </div> 
    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

<footer class="footer">
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>