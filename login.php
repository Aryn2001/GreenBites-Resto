<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Login</title>
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

/* login form  */

.login-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 20px;
    background-color: #f0f9f4;
    font-family: 'Segoe UI', sans-serif;
}

.login-container {
    max-width: 500px;
    width: 100%;
    background: #fff;
    padding: 40px 30px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.login-container h2 {
    text-align: center;
    color: #27ae60;
    margin-bottom: 25px;
}

.login-form .form-group {
    margin-bottom: 20px;
}

.login-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    outline: none;
}

.checkbox-group {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
}

.btn-login {
    width: 100%;
    padding: 12px;
    background-color: #27ae60;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-login:hover {
    background-color: #219150;
}

.form-footer {
    text-align: center;
    margin-top: 20px;
}

.form-footer a {
    color: #27ae60;
    text-decoration: none;
    font-weight: 500;
}

.form-footer a:hover {
    text-decoration: underline;
}

.error-message {
    background-color: #ffcccc;
    color: #b10000;
    padding: 10px 15px;
    margin-bottom: 15px;
    border-radius: 6px;
    text-align: center;
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

    <section class="login-section">
    <div class="login-container">
        <h2>Login to Your Green Bites Account</h2>

        <div id="login-error-message" class="error-message" style="display:none;">
            Invalid email/username or password.
        </div>

        <form action="process_login.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="loginEmail">Email address or Username</label>
                <input type="text" id="loginEmail" name="loginEmail" placeholder="Enter your email or username" required>
            </div>

            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Enter your password" required>
            </div>

            <div class="form-group checkbox-group">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>

        <div class="form-footer">
            <a href="forgot_password.php">Forgot Your Password?</a>
            <p>Don't have an account? <a href="register.php">Sign Up Here</a></p>
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

