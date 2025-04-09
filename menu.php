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
    <!-- Navbar from index.php -->
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

   
     <!-- Featured Dishes Slider -->
     <section class="featured-slider">
        <h2>Featured Dishes</h2>
        <div class="slider-container">
            <button class="prev">&#10094;</button>
            <div class="slider">
                <div class="slide"><img src="images/salad.jpg" alt="Dish 1">hello</div>
                <div class="slide"><img src="images/lentil.jpg" alt="Dish 2"></div>
                <div class="slide"><img src="images/dish3.jpg" alt="Dish 3"></div>
                <div class="slide"><img src="images/dish4.jpg" alt="Dish 4"></div>
            </div>
            <button class="next">&#10095;</button>
        </div>
    </section>

    <!-- Menu Grid -->
    <section class="menu">
        <h2>Our Menu</h2>
        <div class="menu-container">
    <div class="menu-item">
        <img src="images/itlpasta.jpg" alt="Paneer Butter Masala">
        <h3>Paneer Butter Masala</h3>
        <p>Rich and creamy tomato-based gravy with soft paneer cubes, a North Indian delight.</p>
        <span class="price">₹220</span>
        <a href="order.php?dish=Paneer Butter Masala" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/quinoa.jpg" alt="Dal Makhani">
        <h3>Dal Makhani</h3>
        <p>Slow-cooked black lentils with butter and cream, offering a smooth, flavorful experience.</p>
        <span class="price">₹180</span>
        <a href="order.php?dish=Dal Makhani" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish3.jpg" alt="Vegetable Biryani">
        <h3>Vegetable Biryani</h3>
        <p>Aromatic basmati rice cooked with mixed vegetables and fragrant spices.</p>
        <span class="price">₹160</span>
        <a href="order.php?dish=Vegetable Biryani" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish4.jpg" alt="Saag Paneer">
        <h3>Saag Paneer</h3>
        <p>Spinach cooked with paneer cubes and mild spices, a healthy and tasty option.</p>
        <span class="price">₹200</span>
        <a href="order.php?dish=Saag Paneer" class="btn btn-success order-btn">Order Now</a>
    </div>

    <!-- Add 11 more dishes similarly -->
</div>

<div class="menu-container">
    <div class="menu-item">
        <img src="images/itlpasta.jpg" alt="Vegetable Spring Rolls">
        <h3>Vegetable Spring Rolls</h3>
        <p>Crispy rolls filled with shredded vegetables, served with dipping sauce.</p>
        <span class="price">₹140</span>
        <a href="order.php?dish=Vegetable Spring Rolls" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/quinoa.jpg" alt="Samosa (2 pcs)">
        <h3>Samosa (2 pcs)</h3>
        <p>Crispy pastry filled with spiced potatoes and peas, a classic Indian snack.</p>
        <span class="price">₹60</span>
        <a href="order.php?dish=Samosa (2 pcs)" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish3.jpg" alt="Veggie Burger">
        <h3>Veggie Burger</h3>
        <p>A delicious vegetarian patty served in a bun with fresh toppings.</p>
        <span class="price">₹120</span>
        <a href="order.php?dish=Veggie Burger" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish4.jpg" alt="Dal Tadka">
        <h3>Dal Tadka</h3>
        <p>Lentils cooked and tempered with aromatic spices and ghee.</p>
        <span class="price">₹160</span>
        <a href="order.php?dish=Dal Tadka" class="btn btn-success order-btn">Order Now</a>
    </div>
</div>

<div class="menu-container">
    <div class="menu-item">
        <img src="images/itlpasta.jpg" alt="Mattar Paneer">
        <h3>Mattar Paneer</h3>
        <p>Green peas and paneer cooked in a tomato-based gravy with mild spices.</p>
        <span class="price">₹210</span>
        <a href="order.php?dish=Mattar Paneer" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/quinoa.jpg" alt="Mushroom Chilli Dry">
        <h3>Mushroom Chilli Dry</h3>
        <p>Crispy fried mushrooms tossed in a spicy and tangy Indo-Chinese sauce.</p>
        <span class="price">₹200</span>
        <a href="order.php?dish=Mushroom Chilli Dry" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish3.jpg" alt="French Fries">
        <h3>French Fries</h3>
        <p>Classic crispy fried potato strips, served with your choice of seasoning.</p>
        <span class="price">₹100</span>
        <a href="order.php?dish=French Fries" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish4.jpg" alt="Pav Bhaji">
        <h3>Pav Bhaji</h3>
        <p>A popular Mumbai street food - spiced mashed vegetables served with buttered bread rolls.</p>
        <span class="price">₹130</span>
        <a href="order.php?dish=Pav Bhaji" class="btn btn-success order-btn">Order Now</a>
    </div>
</div>

<div class="menu-container">
    <div class="menu-item">
        <img src="images/itlpasta.jpg" alt="Chana Masala">
        <h3>Chana Masala</h3>
        <p>Spicy and tangy chickpea curry, a popular North Indian dish.</p>
        <span class="price">₹150</span>
        <a href="order.php?dish=Chana Masala" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/quinoa.jpg" alt="Aloo Gobi">
        <h3>Aloo Gobi</h3>
        <p>Potatoes and cauliflower cooked with turmeric, cumin, and other spices.</p>
        <span class="price">₹140</span>
        <a href="order.php?dish=Aloo Gobi" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish3.jpg" alt="Vegetable Pulao">
        <h3>Vegetable Pulao</h3>
        <p>Fragrant rice cooked with select vegetables and mild Indian spices.</p>
        <span class="price">₹130</span>
        <a href="order.php?dish=Vegetable Pulao" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish4.jpg" alt="Vegetable Fried Rice">
        <h3>Vegetable Fried Rice</h3>
        <p>Stir-fried rice with a medley of fresh vegetables and light soy sauce.</p>
        <span class="price">₹160</span>
        <a href="order.php?dish=Vegetable Fried Rice" class="btn btn-success order-btn">Order Now</a>
    </div>
</div>

<div class="menu-container">
    <div class="menu-item">
        <img src="images/itlpasta.jpg" alt="Vegetable Hakka Noodles">
        <h3>Vegetable Hakka Noodles</h3>
        <p>Stir-fried noodles with mixed vegetables and a savory Chinese sauce.</p>
        <span class="price">₹170</span>
        <a href="order.php?dish=Vegetable Hakka Noodles" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/quinoa.jpg" alt="Paneer Chilli Dry">
        <h3>Paneer Chilli Dry</h3>
        <p>Crispy fried paneer tossed in a spicy and tangy Indo-Chinese sauce.</p>
        <span class="price">₹210</span>
        <a href="order.php?dish=Paneer Chilli Dry" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish3.jpg" alt="Vegetable Manchurian Dry">
        <h3>Vegetable Manchurian Dry</h3>
        <p>Deep-fried vegetable balls tossed in a flavorful and slightly sweet sauce.</p>
        <span class="price">₹190</span>
        <a href="order.php?dish=Vegetable Manchurian Dry" class="btn btn-success order-btn">Order Now</a>
    </div>

    <div class="menu-item">
        <img src="images/dish4.jpg" alt="Schezwan Noodles">
        <h3>Schezwan Noodles</h3>
        <p>Stir-fried noodles with vegetables in a spicy and bold Schezwan sauce.</p>
        <span class="price">₹180</span>
        <a href="order.php?dish=Schezwan Noodles" class="btn btn-success order-btn">Order Now</a>
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