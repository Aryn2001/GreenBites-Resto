<?php
include 'db_connect.php'; // Include your database connection
?>


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Offers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <style>/* Footer Styling */
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

    <section class="offers">
        <h1 class="offer-title">Delicious Deals & Healthy Steals at Green Bites!</h1>
        <p class="offer-intro">Check out our latest promotions and enjoy healthy dining at great prices!</p>

        <div class="offer-item">
            <img src="images/of1.png" alt="Salad Bowl">
            <div class="offer-content">
                <h2>Wellness Wednesday</h2>
                <p>Every Wednesday, enjoy <strong>15% off</strong> all our signature salads and protein-packed bowls.</p>
                <span class="offer-valid">Valid every Wednesday for dine-in and takeaway.</span>
            </div>
        </div>

        <div class="offer-item">
            <img src="images/of2.png" alt="Indian Dish">
            <div class="offer-content">
                <h2>Taste of India Tuesday</h2>
                <p>Get a <strong>10% discount</strong> on all vegetarian Indian main courses like Paneer Butter Masala and Vegetable Biryani.</p>
                <span class="offer-valid">Valid every Tuesday for dine-in and takeaway.</span>
            </div>
        </div>

        <div class="offer-item">
            <img src="images/of3.png" alt="Healthy Breakfast">
            <div class="offer-content">
                <h2>Weekend Breakfast Boost</h2>
                <p>Enjoy a complimentary fresh juice or fruit salad with any breakfast item from 8:00 AM - 10:00 AM.</p>
                <span class="offer-valid">Valid on weekends for dine-in only.</span>
            </div>
        </div>

        <div class="offer-item">
            <img src="images/of4.png" alt="Refer a Friend">
            <div class="offer-content">
                <h2>Refer a Friend & Get Rewarded</h2>
                <p>Refer a friend, and when they make their first purchase of ₹500, you'll get a ₹100 discount on your next order!</p>
                <span class="offer-valid">See terms and conditions for details.</span>
            </div>
        </div>

        <div class="offer-item">
            <img src="images/of5.png" alt="Student Special">
            <div class="offer-content">
                <h2>Student Special</h2>
                <p>Show your student ID and receive <strong>10% off</strong> your order. Eat smart, study better!</p>
                <span class="offer-valid">Valid with a student ID.</span>
            </div>
        </div>
    </section>

    <!-- Footer Section Starts -->
<footer class="footer">
    <div class="container">
        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i> About</a>
            <a href="menu.html"><i class="fas fa-angle-right"></i> Menu</a>
            <a href="reservation.html"><i class="fas fa-angle-right"></i> Reservations</a>
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