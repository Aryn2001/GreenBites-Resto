<!-- <?php
// Database Connection
$conn = new mysqli("localhost", "root", "Mysql@2024", "hotel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch dishes from database
$sql = "SELECT id, dish_name, price FROM menu";
$result = $conn->query($sql);
?> -->

<?php
// Fetch the dish name from the URL parameter
$dish_name = isset($_GET['dish']) ? $_GET['dish'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
/* --- 1. Order Hero Section CSS (Updated for Image and Lighter Overlay) --- */
.hero-order {
    /* FIX: Placeholder image replaced with a visually appealing delivery image URL */
    /* NOTE: Please replace 'uploaded:image_8d1cc6.jpg-a177f0b5-5d25-4ce9-bd98-95d08214b5b0' with the actual path to your high-quality hero image */
    background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), 
    url('images/hero-bg.jpg') center/cover no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 400px; /* Thoda aur bada height taaki image acchi dikhe */
    display: flex; /* Flexbox use kiya taaki content center mein rahe */
    align-items: center;
    justify-content: center;
    color: white; /* Text color white rakha hai, kyunki background abhi bhi dark hai */
    padding: 80px 0;
    text-align: center;
}

.hero-order h1 {
    font-size: 3.8rem; /* Thoda bada size */
    font-weight: 800;
    margin-bottom: 15px;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); /* Text visibility ke liye shadow ko thoda dark kiya */
}

.hero-order p {
    font-size: 1.6rem;
    font-weight: 300;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.btn-menu-link {
    background: #f39c12;
    border: none;
    padding: 15px 40px; /* Thoda bada button */
    font-size: 1.2rem;
    font-weight: bold;
    border-radius: 10px;
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.btn-menu-link:hover {
    background: #e67e22;
    color: white;
    transform: translateY(-2px);
}

/* --- 2. How It Works Section CSS (Existing) --- */
.steps-section {
    padding: 40px 0;
    text-align: center;
    background: #e9f7ef;
}

.step-box {
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    transition: transform 0.3s;
}

.step-box:hover {
    transform: translateY(-5px);
}

.step-box i {
    font-size: 3rem;
    color: #28a745;
    margin-bottom: 15px;
}

.step-box h4 {
    color: #333;
    font-weight: 600;
}

/* --- 3. Existing Order Form CSS --- */
.order-section {
    background: #f9f9f9;
    padding: 50px 0;
}

.order-wrapper {
    max-width: 500px;
    margin: auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.order-wrapper h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #28a745;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.form-group input, .form-control {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.btn-submit {
    width: 100%;
    background: #28a745;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-submit:hover {
    background: #218838;
}
        
/* --- Existing Footer Styling --- */
.footer {
    background: #2c3e50;
    color: white;
    padding: 40px 0;
    text-align: center;
}

.container {
    /* Container styling in body, changed here for better context */
    max-width: 1200px;
    margin: auto;
}
/* ... remaining footer CSS ... */
    </style>
    <script src="js/script.js" defer></script>
</head>
<body>

    <!-- Navbar from index.php (Assuming this is already clean) -->
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

    <!-- 1. Order Hero Section (New) -->
    <section class="hero-order">
        <div class="container">
            <!-- Content Center Mein lane ke liye flexbox properties upar CSS mein set ki gayi hain -->
            <div>
                <h1>Quick, Fresh & Hot Delivery!</h1>
                <p>Order your favorite Green Bites dish delivered right to your door in **45 minutes**.</p>
                <a href="menu.php" class="btn btn-menu-link text-white">
                    <i class="fas fa-utensils me-2"></i> Browse Full Menu
                </a>
            </div>
        </div>
    </section>

    <!-- 2. How It Works Section (New) -->
    <section class="steps-section">
        <div class="container">
            <h2 class="mb-5 text-success fw-bold">How It Works</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="step-box">
                        <i class="fas fa-clipboard-list"></i>
                        <h4>1. Select Your Dish</h4>
                        <p>Choose from our wide, wholesome menu.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-box">
                        <i class="fas fa-shopping-cart"></i>
                        <h4>2. Confirm Details</h4>
                        <p>Enter quantity and your delivery location.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-box">
                        <i class="fas fa-motorcycle"></i>
                        <h4>3. Quick Delivery</h4>
                        <p>Receive your fresh, hot food promptly!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Existing Order Form Section -->
    <section class="order-section">
        <div class="order-wrapper">
            <h2>Order Your Favorite Dish</h2>

            <form action="process_order.php" method="POST">
                <div class="form-group">
                    <label for="dish">Dish Name</label>
                    <input type="text" id="dish" name="dish" 
                        value="<?php echo htmlspecialchars($dish_name); ?>" 
                        placeholder="Dish name" readonly required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" 
                        placeholder="Enter quantity" min="1" required>
                </div>

                <div class="form-group">
                    <label for="address">Delivery Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your full address" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" 
                        placeholder="Enter your phone number" required>
                </div>

                <button type="submit" class="btn-submit">Order Now</button>
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
</html>

<?php // $conn->close(); ?>
