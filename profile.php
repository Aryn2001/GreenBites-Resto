<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en"> <!-- Changed from <php> to <html> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Profile</title>

    <!-- CSS & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="profile.css"> <!-- moved into head -->

    <script src="js/script.js" defer></script>

    <style>
        /* your inline CSS (footer + profile) remains unchanged here */
        /* ... */
           /* Footer Styling */
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

/* Footer Bottom */
.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    border-top: 1px solid #444;
    padding-top: 10px;
}

/* profile */


.profile-container {
    max-width: 600px;
    margin: 80px auto;
    background-color: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.profile-container h2 {
    text-align: center;
    color: #2e7d32;
    margin-bottom: 30px;
}

.profile-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.profile-info label {
    font-weight: bold;
    color: #444;
    margin-bottom: 6px;
}

.profile-info .info-box {
    background-color: #f1f1f1;
    padding: 12px 16px;
    border-radius: 10px;
    color: #333;
    font-size: 16px;
}

.logout-btn {
    display: block;
    width: 100%;
    padding: 12px;
    margin-top: 30px;
    border: none;
    background-color: #43a047;
    color: white;
    font-weight: bold;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.logout-btn:hover {
    background-color: #2e7d32;
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
        <li class="nav-item"><a class="nav-link" href="reservation.php">Reserve</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="offers.php">Offers</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <?php if (isset($_SESSION['user_id'])): ?>
            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="order_history.php">My Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
        <?php endif; ?>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Profile Content -->
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

    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="containerf">
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
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    <p class="footer-bottom">&copy; 2025 Green Bytes | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
