<?php
include("admin_check.php");

$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

$order_count = $reservation_count = $user_count = $menu_count = 0;

$order_result = $conn->query("SELECT COUNT(*) AS count FROM orders");
$order_count = $order_result->fetch_assoc()['count'];

$reservation_result = $conn->query("SELECT COUNT(*) AS count FROM reservations");
$reservation_count = $reservation_result->fetch_assoc()['count'];

$user_result = $conn->query("SELECT COUNT(*) AS count FROM users");
$user_count = $user_result->fetch_assoc()['count'];

$menu_result = $conn->query("SELECT COUNT(*) AS count FROM menu");
$menu_count = $menu_result->fetch_assoc()['count'];
?>


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <style>

  .admin-navbar {
    background-color: #28a745; /* Green background */
    padding: 15px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .admin-navbar .navbar-brand {
    font-size: 1.5rem;
    letter-spacing: 1px;
  }

  .admin-navbar .nav-link {
    color: white;
    transition: all 0.3s ease;
    border: 1px solid white;
    margin-left: 8px;
  }

  .admin-navbar .nav-link:hover {
    background-color: white;
    color: #28a745 !important;
  }

  @media (max-width: 768px) {
    .admin-navbar .nav-link {
      display: block;
      margin-top: 10px;
    }
  }

/* Admin Dashboard Section Styling */
/* Make the container a little wider and add spacing */
.container.my-5 {
  padding-top: 60px;
  padding-bottom: 60px;
  background-color: #f4f8f5;
  border-radius: 12px;
}

/* Section Heading */
.container.my-5 h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: #218838;
  margin-bottom: 50px;
}

/* Dashboard Cards */
.dashboard-card {
    border: 1px solid #dee2e6;
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #ffffff;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 128, 0, 0.15);
}

.dashboard-card .card-title {
    font-weight: 600;
    color: #198754;
}

.dashboard-card .card-text {
    font-size: 2rem;
    font-weight: bold;
    color: #343a40;
}

.dashboard-card .btn {
    margin-top: 10px;
}

/* Responsive Fix */
@media (max-width: 767px) {
  .col-md-3 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
    /* Footer Styling */
.footer {
    background: #2c3e50;
    color: white;
    padding: 40px 0;
    text-align: center;
}

.container {
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

/* Footer Bottom */
.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    border-top: 1px solid #444;
    padding-top: 10px;
}
</style>
</head>
<body>
    <!-- Navbar from index.php -->
    <nav class="navbar navbar-expand-lg admin-navbar mb-4">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="#">Admin Panel</a>
    <div>
      <a class="nav-link btn btn-outline-light me-2" href="manage_orders.php">Orders</a>
      <a class="nav-link btn btn-outline-light me-2" href="manage_users.php">Users</a>
      <a class="nav-link btn btn-outline-light me-2" href="manage_menu.php">Menu</a>
      <a class="nav-link btn btn-outline-light me-2" href="manage_reservations.php">Reservations</a>
    </div>
  </div>
</nav>

<section class="container my-5">
    <h2 class="text-success mb-4 text-center">Admin Dashboard</h2>
    
    <div class="row g-4">
    <div class="col-md-3">
        <div class="card dashboard-card shadow-sm text-center">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text display-6"><?php echo $order_count; ?></p>
                <a href="manage_orders.php" class="btn btn-outline-success">View Orders</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card dashboard-card shadow-sm text-center">
            <div class="card-body">
                <h5 class="card-title">Reservations</h5>
                <p class="card-text display-6"><?php echo $reservation_count; ?></p>
                <a href="manage_reservations.php" class="btn btn-outline-success">View Reservations</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card dashboard-card shadow-sm text-center">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text display-6"><?php echo $user_count; ?></p>
                <a href="manage_users.php" class="btn btn-outline-success">Manage Users</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
  <div class="card shadow-sm text-center">
    <div class="card-body">
      <h5 class="card-title">Menu Items</h5>
      <p class="card-text display-6">
        <?php
          include 'db_connect.php';
          $menuCountQuery = $conn->query("SELECT COUNT(*) as total FROM menu");
          $menuCount = $menuCountQuery->fetch_assoc();
          echo $menuCount['total'];
        ?>
      </p>
      <a href="manage_menu.php" class="btn btn-outline-success">Edit Menu</a>
    </div>
  </div>
</div>

</div>


    <div class="text-center mt-4">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</section>


<!-- Footer Section Starts -->
<footer class="footer">
    <div class="container">
        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="menu.php"><i class="fas fa-angle-right"></i> Menu</a>
            <a href="reservation.php"><i class="fas fa-angle-right"></i> Reservations</a>
        </div>

        <div class="footer-box">
            <h3>Our Services</h3>
            <a href="#"><i class="fas fa-concierge-bell"></i> Dine-in</a>
            <a href="#"><i class="fas fa-utensils"></i> Catering</a>
            <a href="#"><i class="fas fa-motorcycle"></i> Home Delivery</a>
            <a href="#"><i class="fas fa-seedling"></i> Organic Ingredients</a>
        </div>

        <div class="footer-box">
            <h3>Contact Us</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 9876543210</a>
            <a href="#"><i class="fas fa-envelope"></i> support@greenbytes.com</a>
            <a href="https://goo.gl/maps/xyz123"><i class="fas fa-map-marker-alt"></i> New Delhi, India</a>
        </div>

        <div class="footer-box">
            <h3>Follow Us</h3>
            <a href="https://facebook.com"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="https://linkedin.com"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    <p class="footer-bottom">&copy; 2025 Green Bytes | All Rights Reserved</p>
</footer>

                 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</php>
