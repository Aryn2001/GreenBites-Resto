<?php
include 'db_connect.php'; // Include your database connection
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Reserve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <style>

    /* form design */

/* General Styles */
.container-res {
  max-width: 600px;
  margin: 40px auto;
  padding: 30px;
  background-color: #f8f9fa;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.container-res h1 {
  text-align: center;
  color: #28a745;
  margin-bottom: 24px;
}

.form-group {
  margin-bottom: 16px;
}

label {
  display: block;
  margin-bottom: 6px;
  font-weight: bold;
}

input, select, textarea {
  width: 100%;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

.btn {
  background-color: #28a745;
  color: white;
  padding: 10px 24px;
  border: none;
  border-radius: 6px;
  width: 100%;
  font-weight: bold;
  cursor: pointer;
}

.btn:hover {
  background-color: #218838;
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

    <section class="container-res">
        <h1>Reserve Your Table</h1>
        
        <form action="process_reservation.php" method="POST" id="reservationForm">
            <div class="form-group">
                <label for="reservation_date">Date:</label>
                <input type="date" id="reservation_date" name="reservation_date" required>
            </div>
            
            <div class="form-group">
                <label for="reservation_time">Time:</label>
                <select id="reservation_time" name="reservation_time" required>
                    <option value="">Select Time</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="12:30">12:30 PM</option>
                    <option value="19:00">7:00 PM</option>
                    <option value="19:30">7:30 PM</option>
                </select>
            </div>

            <div class="form-group">
                <label for="party_size">Number of People:</label>
                <input type="number" id="party_size" name="party_size" min="1" max="10" required>
            </div>

            <div class="form-group">
                <label for="customer_name">Your Name:</label>
                <input type="text" id="customer_name" name="customer_name" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Phone Number:</label>
                <input type="tel" id="contact_number" name="contact_number" required>
            </div>

            <div class="form-group">
                <label for="special_requests">Special Requests (Optional):</label>
                <textarea id="special_requests" name="special_requests"></textarea>
            </div>

            <button type="submit" class="btn">Reserve Table</button>
        </form>
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