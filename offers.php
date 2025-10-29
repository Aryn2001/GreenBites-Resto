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
    <style>
    
    

/* --- 1. Offers Hero Section CSS (New) --- */
.hero-offers {
    /* Placeholder image for a fresh, appealing look */
    background: linear-gradient(to bottom right, rgba(40, 167, 69, 0.8), rgba(60, 190, 89, 0.7)), 
                url('https://placehold.co/1200x400/28a745/ffffff?text=Green+Bites+Deals') center/cover no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 300px; 
    display: flex; 
    align-items: center;
    justify-content: center;
    color: white; 
    padding: 40px 0;
    text-align: center;
    clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%); /* Slanted bottom edge for design */
}

.hero-offers .hero-content {
    max-width: 800px;
    padding: 0 15px;
}

.hero-offers h1 {
    font-size: 3rem; 
    font-weight: 900;
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-offers p {
    font-size: 1.2rem;
    font-weight: 300;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

/* --- 2. Offers Section Specific Styles (Enhanced) --- */
.offers {
    padding: 60px 20px;
    max-width: 1200px;
    margin: -30px auto 40px auto; /* Pull section up to overlap with hero slant */
}

.offer-title {
    color: #28a745;
    text-align: center;
    font-weight: 700;
    margin-bottom: 10px;
}

.offer-intro {
    text-align: center;
    color: #555;
    margin-bottom: 50px;
    font-size: 1.1rem;
}

.offer-item {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    background: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    transition: box-shadow 0.3s;
}

.offer-item:hover {
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}

.offer-item img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 20px;
}

.offer-content h2 {
    color: #f39c12;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.offer-content p strong {
    color: #28a745;
}

.offer-valid {
    display: block;
    font-size: 0.9rem;
    color: #888;
    margin-top: 10px;
    border-top: 1px dashed #eee;
    padding-top: 5px;
}

/* --- 3. CTA Section (New) --- */
.cta-banner {
    background-color: #2c3e50; /* Footer background color for contrast */
    color: white;
    padding: 30px 0;
    text-align: center;
    margin-bottom: 40px;
}

.cta-banner h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.cta-banner .btn-action {
    background-color: #f39c12;
    color: white;
    border: none;
    padding: 10px 30px;
    border-radius: 25px;
    font-weight: bold;
    text-transform: uppercase;
    transition: background-color 0.3s;
}

.cta-banner .btn-action:hover {
    background-color: #e67e22;
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


    <!-- 1. Offers Hero Section (New Content) -->
    <section class="hero-offers">
        <div class="hero-content">
            <h1>Unlock Exclusive Savings Today!</h1>
            <p>Don't miss out on our limited-time deals for healthy, delicious vegetarian food. Order now or book a table!</p>
        </div>
    </section>

    <!-- 2. Call to Action / Eligibility Banner (New Content) -->
    <section class="cta-banner">
        <div class="container">
            <h3>Ready to Claim Your Deal?</h3>
            <p class="mb-3">All offers can be claimed through online ordering or by mentioning them when you reserve a table.</p>
            <a href="order.php" class="btn-action">Order Online Now <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </section>


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