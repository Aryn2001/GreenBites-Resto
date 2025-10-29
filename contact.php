<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Assuming css/style.css and js/script.js exist on your server -->
    <link rel="stylesheet" href="css/style.css"> 
    <script src="js/script.js" defer></script>
    <style>
    /* Custom styles for the contact section */
    .custom-navbar {
        background-color: #2e7d32; /* Deep green for navbar */
    }
    .custom-navbar a {
        color: #fff !important;
        transition: color 0.3s;
    }
    .custom-navbar a:hover {
        color: #b9f6ca !important; /* Light accent on hover */
    }

    .contact-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #f1f8e9, #e8f5e9);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
    }

    .contact-wrapper {
        background-color: #fff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        position: relative; 
    }

    .contact-wrapper h2 {
        text-align: center;
        color: #2e7d32;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #4e7d2e;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        resize: vertical;
        transition: border-color 0.3s;
    }
    
    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        border-color: #4CAF50;
        outline: none;
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
    }

    .contact-wrapper .btn-send {
        display: block !important; 
        width: 100% !important;
        max-width: 250px !important; 
        margin: 30px auto 0 auto !important; 
        
        padding: 12px;
        background-color: #4caf50;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        cursor: pointer;
        position: static !important; 
        bottom: auto !important; 
        right: auto !important; 
    }

    .btn-send:hover {
        background-color: #388e3c;
    }
    
    /* Custom Modal/Message Box Styles */
    #notification-message { /* Used for success/error alerts */
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        opacity: 0;
        transform: translateY(-20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
        font-weight: 600;
        display: none; /* Hidden by default */
    }

    #notification-message.show {
        opacity: 1;
        transform: translateY(0);
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

    .footer-bottom {
        margin-top: 20px;
        font-size: 14px;
        border-top: 1px solid #444;
        padding-top: 10px;
    }
    </style>
</head>
<body>
    <!-- Custom success message box -->
    <div id="notification-message"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="index.php">
                <i class="fas fa-leaf me-2"></i>Green Bites
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

    <section class="contact-section">
        <div class="contact-wrapper">
            <h2>Send Us a Message</h2>

            <!-- The action points to the separate handler file -->
            <form action="submit_contact.php" method="POST"> 
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="message_type">Topic</label>
                    <select id="message_type" name="message_type" required>
                        <option value="">Select a topic</option>
                        <option value="Inquiry">General Inquiry</option>
                        <option value="Feedback">Website Feedback</option>
                        <option value="Order Issue">Order Issue</option>
                        <option value="Bug Report">Bug Report</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>

                <button type="submit" class="btn-send">Send Message</button>
            </form>
        </div>
    </section>

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

    <script>
        // Function to handle URL parameters for displaying success/error messages
        function showNotification(message, isSuccess) {
            const box = document.getElementById('notification-message');
            box.textContent = message;
            box.style.backgroundColor = isSuccess ? '#4CAF50' : '#f44336';
            
            box.style.display = 'block';
            
            setTimeout(() => {
                box.classList.add('show');
            }, 10); 

            setTimeout(() => {
                box.classList.remove('show');
                setTimeout(() => {
                    box.style.display = 'none';
                }, 500); 
            }, 4000);
        }

        // Check URL parameters for status upon page load
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const message = urlParams.get('message');

            if (status === 'success') {
                showNotification("Thank you! Your message has been sent successfully.", true);
            } else if (status === 'error') {
                const errorMessage = message || "An error occurred. Please check the server logs.";
                showNotification(errorMessage, false);
            }
            
            // Clean up the URL after showing the message to prevent it from reappearing on refresh
            if (status) {
                // history.replaceState is used to clean the URL without a full page reload
                history.replaceState(null, '', window.location.pathname);
            }
        };
    </script>
</body>
</html>
