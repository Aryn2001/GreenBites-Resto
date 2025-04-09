<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
  

    <style>
    
/* navbar     */
/* styles.css */

.custom-navbar {
  background-color: #198754 !important; /* Bootstrap green */
  padding: 12px 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 999;
}

/* Sticky Top handled by Bootstrap with sticky-top class */

/* Optional: Hover Effects */
.navbar-nav .nav-link {
  color: #ffffff !important;
  margin-left: 15px;
  transition: color 0.3s, background-color 0.3s;
  border-radius: 5px;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  color: #ffffff;
}

/* Optional: Make the logo stand out */
.navbar-brand {
  font-weight: bold;
  letter-spacing: 1px;
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
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
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

    <div class="container mt-4">
        <h1 class="text-success">Welcome to Green Bites</h1>
        <p>Healthy Eating, Made Simple!</p>
    </div>


    <div class="hero-section">
    <div class="hero-slider">
        <div class="hero-slide active-slide" style="background-image: url('images/salad.jpg');"></div>
        <div class="hero-slide" style="background-image: url('images/itlpasta.jpg');"></div>
        <div class="hero-slide" style="background-image: url('images/avocado.jpg');"></div>
    </div>

    <div class="hero-content">
        <h1>Fresh & Healthy Meals</h1>
        <p>Experience the best organic dishes made with love.</p>
        <a href="menu.php" class="btn btn-primary">View Menu</a>
    </div>

    <div class="slider-controls">
        <span class="hero-prev">&#10094;</span>
        <span class="hero-next">&#10095;</span>
    </div>

    <div class="hero-dots">
        <span class="hero-dot active" data-index="0"></span>
        <span class="hero-dot" data-index="1"></span>
        <span class="hero-dot" data-index="2"></span>
    </div>
</div>


  
 <!-- Main Content -->
<section class="container explore-section my-5 p-4">
  <h2 class="text-success text-center fw-bold mb-4">Explore Our World</h2>
  
  <p class="lead text-muted text-justify">
    Discover the delicious side of healthy living! <strong>Green Bites</strong> proves that nourishing your body can be an exciting culinary adventure, right here in Haridwar.
  </p>
  <p class="text-muted text-justify">
    Explore our menu of handcrafted, guilt-free indulgences—from protein-packed bowls bursting with local goodness to vibrant smoothies blended with seasonal fruits—all created with <strong>100% fresh, organic ingredients</strong>.
  </p>
  <p class="text-muted text-justify">
    <strong class="text-success">Savor the Flavor, Skip the Guilt:</strong> Indulge in our handcrafted creations, knowing every bite is packed with goodness and designed to delight your taste buds without compromise.
  </p>
  <p class="text-muted text-justify">
    <strong class="text-success">Fresh & Organic, Rooted in Goodness:</strong> We're committed to sourcing the finest 100% fresh and organic ingredients.
  </p>
  <p class="text-muted text-justify">
    <strong class="text-success">Handcrafted with Passion, Served with Care:</strong> Every dish is made with love, ensuring it nourishes your body and delights your senses.
  </p>

  <!-- Gallery Section -->
  <div class="gallery mt-5">
    <div class="row g-3">
      <div class="col-md-4 col-sm-6">
        <img src="images/gl1.png" class="img-fluid rounded shadow-sm" alt="Dish 1">
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="images/gl2.png" class="img-fluid rounded shadow-sm" alt="Dish 2">
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="images/gl3.png" class="img-fluid rounded shadow-sm" alt="Dish 3">
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="images/gl4.png" class="img-fluid rounded shadow-sm" alt="Dish 4">
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="images/gl5.png" class="img-fluid rounded shadow-sm" alt="Dish 5">
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="images/gl6.png" class="img-fluid rounded shadow-sm" alt="Dish 6">
      </div>
    </div>
  </div>


</section>


    <!-- About Section -->
    <section class="about-section container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-success mb-3">Why Choose Green Bites?</h2>
                <p>At Green Bites, we believe in fresh, nutritious meals that delight your taste buds while keeping you healthy. Our chefs craft dishes using organic ingredients, ensuring a balance of flavor and wellness.</p>
            </div>
            <div class="col-md-6">
                <img src="images/hero-bg.jpg" alt="Green Bites Restaurant or Ingredients">
            </div>
        </div>
    </section>

    <!-- Featured Dishes Section -->
    <section class="featured-dishes container my-5">
        <h2>Our Specialties</h2>
        <div class="row g-4">
            <!-- Dish 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/avocado.jpg" class="card-img-top" alt="Grilled Avocado Salad">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Avocado Salad</h5>
                        <p class="card-text">A perfect blend of fresh greens, grilled avocado, and a zesty lemon dressing.</p>
                        <p class="price">₹350</p>
                        <a href="order.php?dish=Paneer Butter Masala" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Dish 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/quinoa.jpg" class="card-img-top" alt="Quinoa Power Bowl">
                    <div class="card-body">
                        <h5 class="card-title">Quinoa Power Bowl</h5>
                        <p class="card-text">Nutrient-packed quinoa with roasted veggies and a tahini drizzle.</p>
                        <p class="price">₹400</p>
                        <a href="order.php?dish=Quinoa Power Bowl" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Dish 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/blueberry.jpg" class="card-img-top" alt="Berry Bliss Smoothie">
                    <div class="card-body">
                        <h5 class="card-title">Berry Bliss Smoothie</h5>
                        <p class="card-text">A refreshing mix of berries, banana, and almond milk.</p>
                        <p class="price">₹250</p>
                        <a href="order.php?dish=Berry Bliss Smoothie" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Dish 4 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/lentil.jpg" class="card-img-top" alt="Berry Bliss Smoothie">
                    <div class="card-body">
                        <h5 class="card-title">Lentil and Vegetable Medley Bowl</h5>
                        <p class="card-text"> A hearty and easy bowl combining cooked lentils with a mix of lightly steamed vegetables such as carrots, peas, and green beans.</p>
                        <p class="price">₹250</p>
                        <a href="order.php?dish=Lentil and Vegetable Medley Bowl" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Dish 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/spaghetti.jpg" class="card-img-top" alt="Berry Bliss Smoothie">
                    <div class="card-body">
                        <h5 class="card-title">Spaghetti</h5>
                        <p class="card-text">Classic Italian simplicity meets a healthy twist. Al dente spaghetti tossed with fragrant garlic, olive oil, a hint of red pepper flakes, and vibrant roasted seasonal vegetables</p>
                        <p class="price">₹250</p>
                        <a href="order.php?dish=Spaghetti" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- Dish 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/itlpasta.jpg" class="card-img-top" alt="Berry Bliss Smoothie">
                    <div class="card-body">
                        <h5 class="card-title">Italian Pasta</h5>
                        <p class="card-text">Indulge in wholesome goodness with our whole wheat penne pasta coated in a rich and creamy tomato sauce, generously studded with fresh spinach.</p>
                        <p class="price">₹250</p>
                        <a href="order.php?dish=Italian Pasta" class="btn btn-success order-btn">Order Now</a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="btn-container">
            <a href="menu.php" class="btn btn-success btn-lg">Explore Full Menu</a>
        </div>
    </section>

    <!-- Health Benefits Section -->
<section class="health-benefits container my-5">
    <h2>Fuel Your Body with Goodness</h2>
    <div class="row">
        <!-- Fresh Ingredients -->
        <div class="col-md-4 benefit-item">
            <img src="images/freshing.jpg" alt="Fresh Ingredients" class="benefit-img">
            <i class="fas fa-leaf"></i>
            <h3>Fresh Ingredients</h3>
            <p>Sourced from local organic farms.</p>
        </div>
        <!-- Nutrition Balanced -->
        <div class="col-md-4 benefit-item">
            <img src="images/balanceddiet.jpg" alt="Nutrition Balanced" class="benefit-img">
            <i class="fas fa-dumbbell"></i>
            <h3>Nutrition Balanced</h3>
            <p>Dishes crafted to maintain a healthy lifestyle.</p>
        </div>
        <!-- Energy Boosting -->
        <div class="col-md-4 benefit-item">
            <img src="images/energy.jpg" alt="Energy Boosting" class="benefit-img">
            <i class="fas fa-bolt"></i>
            <h3>Energy Boosting</h3>
            <p>Meals designed to keep you active & energized.</p>
        </div>
    </div>
</section>

    <!-- Customer Reviews Section -->
<section class="customer-reviews container my-5">
    <h2>What Our Guests Say</h2>
    <div class="row g-4">
        <!-- Review 1 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev1.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">"Absolutely loved the fresh flavors! A must-visit for health-conscious foodies."</p>
                    <h5 class="card-title">– Sarah L.</h5>
                </div>
            </div>
        </div>
        <!-- Review 2 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev2.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">"Great ambiance, and the food is both delicious & nutritious!"</p>
                    <h5 class="card-title">– Mark T.</h5>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-4">
            <div class="card review-card">
                <div class="card-body">
                <img src="images/rev3.png" alt="Sarah L." class="review-img" style="width: 90px; height: 90px;">
                    <p class="card-text">"Finally, a restaurant that cares about both taste and health. 5 stars!"</p>
                    <h5 class="card-title">– Emily R.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-container">
        <a href="reviews.php" class="btn btn-success btn-lg">Read More Reviews</a>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container text-center">
        <div class="cta-content">
            <h2 class="mb-4">Ready to Taste the Freshness?</h2>
            <p class="lead">Experience the perfect blend of health and taste. Reserve a table, order online, or reach out to us today!</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="reservation.php" class="btn btn-light btn-lg cta-btn">Reserve a Table</a>
                <a href="order.php" class="btn btn-warning btn-lg cta-btn">Order Online</a>
                <a href="contact.php" class="btn btn-primary btn-lg cta-btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>


<!-- footer section -->

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