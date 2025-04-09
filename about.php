<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <style>/* About Section */


.header {
    text-align: center;
    padding: 40px 20px;
    background-color: #e6ffe6;
}

.header h1 {
    font-size: 3rem;
    color: #2d7d46;
}

.highlight {
    color: #28a745;
}

.about-section {
    padding: 60px 10%;
}

.about-content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 50px;
}

.image-container img {
    width: 100%;
    max-width: 500px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.image-container img:hover {
    transform: scale(1.03);
}

.greenbytes-about {
    max-width: 600px;
}

.greenbytes-about h2 {
    color: #28a745;
    margin-bottom: 20px;
}

.greenbytes-about p {
    font-size: 1.1rem;
    color: #444;
    line-height: 1.6;
}

.eco-features {
    margin-top: 30px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.eco-feature {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #eafbe9;
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    cursor: pointer;
}

.eco-feature:hover {
    background: #dff5dd;
    transform: translateY(-3px);
}

.eco-feature i {
    color: #28a745;
    font-size: 1.5rem;
}

/* Reviews Section */
.reviews-section {
    padding: 60px 20px;
    background-color: #f0fdf4;
    text-align: center;
}

.reviews-section h2 {
    font-size: 2.2rem;
    color: #2e7d32;
    margin-bottom: 40px;
}

.reviews-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.review-box {
    background-color: #ffffff;
    padding: 25px 20px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.review-box p {
    font-style: italic;
    color: #444;
    margin-bottom: 20px;
    line-height: 1.6;
}

.review-box h4 {
    font-weight: 600;
    color: #2e7d32;
    margin-top: auto;
}

.review-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
}


/* Feedback Form */
.feedback-section {
    padding: 50px;
    text-align: center;
    background: #fff;
}

.feedback-form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    background: #27ae60;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    width: 100%;
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
<script>
    // Fade in effect for about section
    document.addEventListener("DOMContentLoaded", () => {
        const features = document.querySelectorAll(".eco-feature");
        features.forEach((feature, index) => {
            feature.style.opacity = 0;
            feature.style.transform = "translateY(20px)";
            setTimeout(() => {
                feature.style.transition = "all 0.5s ease";
                feature.style.opacity = 1;
                feature.style.transform = "translateY(0)";
            }, index * 150);
        });
    });
</script>

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

   

<!-- About Section -->
<div class="header">
<h1>About <span class="highlight">Green Bites</span></h1>
</div>

<section class="about-section">
    <div class="about-content">
        <div class="image-container">
            <img src="images/quinoa.jpg" alt="Delicious Food">
        </div>

        <div class="greenbytes-about">
            <h2>Why Choose <span class="highlight">Green Bites</span>?</h2>
            <p>At Green Bites, we believe in fresh flavors and a vibrant, healthy lifestyle. We're more than a restaurant — we're your partner in guilt-free, joyful eating. Every bite is a step toward a healthier you.</p>
            <p>From thoughtfully sourced ingredients to nutrition-focused recipes, we ensure every dish nourishes both your body and your soul.</p>

            <div class="eco-features">
                <div class="eco-feature"><i class="fas fa-leaf"></i> <span>Fresh & Organic Ingredients</span></div>
                <div class="eco-feature"><i class="fas fa-globe"></i> <span>Delicious & Nutritious Meals</span></div>
                <div class="eco-feature"><i class="fas fa-heart"></i> <span>Wholesome & Guilt-Free Indulgence</span></div>
                <div class="eco-feature"><i class="fas fa-chart-pie"></i> <span>Full Nutritional Transparency</span></div>
                <div class="eco-feature"><i class="fas fa-smile-beam"></i> <span>Refreshing Dining Experience</span></div>
            </div>
        </div>
    </div>
</section>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section">
    <h2>What Our Travelers Say</h2>
    <div class="reviews-container">
        <div class="review-box">
            <p>"Green Bytes helped me plan the most sustainable trip ever! I loved how they prioritized eco-friendly stays."</p>
            <h4>Emily</h4>
        </div>
        <div class="review-box">
            <p>"Amazing experience! The team ensured everything was planned responsibly. Highly recommended!"</p>
            <h4>Jake</h4>
        </div>
        <div class="review-box">
            <p>"I appreciate their commitment to sustainability. It made my vacation meaningful!"</p>
            <h4>Olivia</h4>
        </div>
        <div class="review-box">
            <p>"Loved the thoughtful planning and green stays. Made me feel like I was contributing to a better world!"</p>
            <h4>Sophia</h4>
        </div>
        <div class="review-box">
            <p>"Green Bites is a breath of fresh air! The food is so flavorful and I love knowing I'm eating something healthy. Highly recommend!"</p>
            <h4>Priya Sharma</h4>
        </div>
        <div class="review-box">
            <p>"Finally, a place where healthy doesn't mean boring! The menu is creative and everything I've tried has been delicious. The ambiance is also lovely."</p>
            <h4>David Miller</h4>
        </div>
        <div class="review-box">
            <p>"As someone who's conscious about nutrition, Green Bites is a gem. The nutritional information is a great touch, and the food tastes amazing. My new favorite spot!"</p>
            <h4>Anjali Kapoor</h4>
        </div>
        <div class="review-box">
            <p>"Great food, friendly service, and a welcoming atmosphere. Green Bites makes eating well an enjoyable experience. I'll definitely be back!"</p>
            <h4>Robert Chen</h4>
        </div>
    </div>
</section>


    <!-- Feedback Form -->
    <section class="feedback-section">
        <h2>Share Your Experience</h2>
        <form action="submit_feedback.php" method="post" class="feedback-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating (1-10):</label>
                <input type="number" id="rating" name="rating" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="comments">Your Feedback:</label>
                <textarea id="comments" name="comments" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
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