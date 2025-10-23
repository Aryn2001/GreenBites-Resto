<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <style>

    /* form part */

    .review-section {
  min-height: 100vh;
  /* background: linear-gradient(to right, #f1f8e9, #e0f2f1); */
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 20px;
}

.review-wrapper {
  background-color: #ffffff;
  padding: 40px;
  border-radius: 16px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  width: 100%;
  max-width: 600px;
}

.review-wrapper h2 {
  text-align: center;
  color: #388e3c;
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 8px;
  color: #2e7d32;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  resize: vertical;
}

.btn-submit {
  width: 100%;
  padding: 12px;
  background-color: #43a047;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.btn-submit:hover {
  background-color: #2e7d32;
}
  
        /* footer */
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


        <!-- Customer Reviews Section -->
<section class="customer-reviews container my-5">
    <h2>What Our Guests Say</h2>
    <div class="row g-4">
        <!-- Review 1 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev4.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">"Absolutely loved the fresh flavors! A must-visit for health-conscious foodies."</p>
                    <h5 class="card-title">– Sarah L.</h5>
                </div>
            </div>
        </div>
        <!-- Review 2 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev5.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">"Great ambiance, and the food is both delicious & nutritious!"</p>
                    <h5 class="card-title">– Mark T.</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev6.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">The Green Bites is a fantastic addition to the neighborhood. Healthy and flavorful!</p>
                    <h5 class="card-title">– Rajesh Kumar </h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev7.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">Absolutely loved the vegetarian options. The flavors were authentic and fresh.</p>
                    <h5 class="card-title">– Priya Sharma</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev8.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">The service was excellent, and the healthy bowls were surprisingly filling and tasty.</p>
                    <h5 class="card-title">– David Lee</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev9.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">A perfect spot for a guilt-free meal. The nutrition information was a great plus.</p>
                    <h5 class="card-title">– Anjali Kapoor</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev10.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">The atmosphere is relaxing, and the menu has a good variety of healthy choices.</p>
                    <h5 class="card-title">– Robert Jones</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev11.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">The snacks were a great way to satisfy cravings without feeling unhealthy. Will visit again!</p>
                    <h5 class="card-title">– Sneha Patel</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev12.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">Highly recommend the smoothies! They are refreshing and packed with goodness.</p>
                    <h5 class="card-title">– Kevin Williams</h5>
                </div>
            </div>
        </div>
    </div>
   
</section>

<section class="review-section">
  <div class="review-wrapper">
    <h2>Leave a Review</h2>

    <form action="submit_review.php" method="post">
      <div class="form-group">
        <label for="dish">Dish Name</label>
        <input type="text" id="dish" name="dish" placeholder="Enter the dish name" required>
      </div>

      <div class="form-group">
        <label for="rating">Rating (1 to 5)</label>
        <input type="number" id="rating" name="rating" placeholder="Rate the dish" min="1" max="5" required>
      </div>

      <div class="form-group">
        <label for="comment">Comment</label>
        <textarea id="comment" name="comment" rows="4" placeholder="Leave your thoughts..." required></textarea>
      </div>

      <button type="submit" class="btn-submit">Submit Review</button>
    </form>
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