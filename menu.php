<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Bites - Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
/* --- STYLES ADDED FOR MENU CONTROLS (Search/Filter) --- */
.menu-controls {
    display: flex;
    flex-wrap: wrap; /* Allows stacking on mobile */
    gap: 20px;
    justify-content: center;
    align-items: center;
    margin: 40px auto 60px auto; /* Increased vertical margin (60px bottom gap) */
    padding: 0 15px;
    max-width: 900px;
}

.menu-search, .menu-filter {
    flex: 1 1 300px; /* Ensures minimum width and flexible resizing */
}

/* Style the search input container */
.menu-search {
    position: relative;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.menu-search input {
    width: 100%;
    /* Increased padding for better visual size */
    padding: 12px 40px 12px 15px; 
    border: 2px solid #f39c12; /* Accent color border */
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s;
}

.menu-search i {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #f39c12;
    font-size: 18px;
    pointer-events: none;
}

/* Style the filter dropdown */
.menu-filter .form-select {
    width: 100%;
    /* Increased padding for better visual size */
    padding: 12px 15px; 
    border: 2px solid #f39c12;
    border-radius: 8px;
    font-size: 16px;
    height: auto; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s;
}
/* --- END OF MENU CONTROL STYLES --- */


/* Footer Styling (Existing) */
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

    
      <!-- Featured Dishes Slider (Placeholder section - no content provided) -->
      <section class="featured-slider">
        <h2>Featured Dishes</h2>
</section>
<section class="menu">
    
    <div class="menu-controls container"> 
        <div class="menu-search">
            <input type="text" id="menuSearch" placeholder="Search Your Favourite Dish...">
            <i class="fas fa-search"></i>
        </div>

        <div class="menu-filter">
        <select id="menuFilter" class="form-select">
        <option value="all">All Categories</option>
        <option value="main-course">Main Course (North Indian)</option>
        <option value="chinese">Indo-Chinese</option>
        <option value="rice-noodle">Rice & Noodles</option>
        <option value="starter">Starters & Snacks</option>
        <option value="indian-bread">Indian Breads</option>
        <option value="beverage">Beverages (Drinks)</option>
    </select>
</div>
    </div>

    <h2 class="section-heading-underline">Our Delicious Menu</h2>
    
    <div class="menu-container"> 
        
        <div class="menu-item" data-category="main-course">
            <img src="images/pbm.png" alt="Paneer Butter Masala">
            <h3>Paneer Butter Masala</h3>
            <p>Rich and creamy tomato-based gravy with soft paneer cubes, gently spiced. A classic North Indian indulgence, perfect with Naan.</p>
            <span class="price">₹220</span>
            <a href="order.php?dish=Paneer Butter Masala" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="main-course">
            <img src="images/dlm.png" alt="Dal Makhani">
            <h3>Dal Makhani</h3>
            <p>Black lentils slow-cooked overnight with butter and cream. Offers a smoky, velvety texture and deep, rich flavour.</p>
            <span class="price">₹180</span>
            <a href="order.php?dish=Dal Makhani" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="main-course">
            <img src="images/shpan.png" alt="Vegetable Biryani">
            <h3>Shahi Paneer</h3>
            <p>Paneer cubes cooked in a royal, rich gravy made from cashew paste, cream, and subtle sweet spices. Truly a dish fit for a king.</p>
            <span class="price">₹160</span>
            <a href="order.php?dish=Vegetable Biryani" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="main-course">
            <img src="images/mk.jpg" alt="Samosa (2 pcs)">
            <h3>Malai Kofta</h3>
            <p>Soft, melt-in-your-mouth vegetable and paneer dumplings simmered in a creamy, mild, and slightly sweet gravy.</p>
            <span class="price">₹60</span>
            <a href="order.php?dish=Samosa (2 pcs)" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="main-course">
            <img src="images/dak.jpg" alt="Saag Paneer">
            <h3>Dum Aloo Kashmiri</h3>
            <p>Baby potatoes stuffed with dry fruits and paneer, slow-cooked in a spicy yogurt-based gravy with a fragrant saffron aroma.</p>
            <span class="price">₹200</span>
            <a href="order.php?dish=Saag Paneer" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="main-course">
            <img src="images/rajm.jpg" alt="Mushroom Chilli Dry">
            <h3>Rajma Masala</h3>
            <p>Classic Punjabi dish of red kidney beans cooked in a thick, spicy gravy with onions, tomatoes, and aromatic spices. Served best with rice.</p>
            <span class="price">₹200</span>
            <a href="order.php?dish=Mushroom Chilli Dry" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="main-course">
            <img src="images/daltad.jpg" alt="Vegetable Hakka Noodles">
            <h3>Dal Tadka</h3>
            <p>Yellow lentils cooked to perfection, tempered with a sizzling mix of ghee, cumin seeds, garlic, and red chilies. Light yet flavourful.</p>
            <span class="price">₹170</span>
            <a href="order.php?dish=Vegetable Hakka Noodles" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="chinese">
            <img src="images/vegspr.jpg" alt="Garlic Naan">
            <h3>Vegetable Spring Rolls</h3>
            <p>Crispy fried rolls filled with a generous mix of shredded cabbage, carrots, and bell peppers. Served hot with sweet chili sauce.</p>
            <span class="price">₹70</span>
            <a href="order.php?dish=Garlic Naan" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="chinese">
            <img src="images/panchildry.jpg" alt="Fresh Lime Soda">
            <h3>Paneer Chilli Dry</h3>
            <p>Crispy fried paneer tossed in a wok with green chilies, onions, and bell peppers in a fiery, tangy Indo-Chinese sauce.</p>
            <span class="price">₹80</span>
            <a href="order.php?dish=Fresh Lime Soda" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="chinese">
            <img src="images/mushdry.jpg" alt="Paneer Chilli Dry">
            <h3>Mushroom Chilli Dry</h3>
            <p>Fried mushroom chunks tossed in a spicy and tangy dark soy and chili sauce. Offers a delightful bite and strong umami flavour.</p>
            <span class="price">₹210</span>
            <a href="order.php?dish=Paneer Chilli Dry" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="chinese">
            <img src="images/vegmunch.jpg" alt="Schezwan Fried Rice">
            <h3>Vegetable Manchurian Dry</h3>
            <p>Deep-fried mixed vegetable balls coated and tossed in a zesty, flavorful, slightly sweet and sour Manchurian sauce.</p>
            <span class="price">₹180</span>
            <a href="order.php?dish=Schezwan Fried Rice" class="btn btn-success order-btn">Order Now</a>
        </div>

        <div class="menu-item" data-category="chinese">
            <img src="images/honeyp.jpg" alt="Butter Roti">
            <h3>Honey Chilli Potato</h3>
            <p>Crispy fried potato fingers tossed in a sticky, sweet-spicy sauce made from chili flakes and honey, garnished with sesame seeds.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="chinese">
            <img src="images/vegcrisp.jpg" alt="Butter Roti">
            <h3>Veg Crispy</h3>
            <p>Batter-fried exotic vegetables tossed in a spicy, fiery chili-garlic paste. A popular crunchy starter with bold flavours.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="chinese">
            <img src="images/amricanchoup.jpg" alt="Butter Roti">
            <h3>Veg American Chopsuey</h3>
            <p>Crispy fried noodles served with a sweet and sour vegetable sauce, topped with a fried egg (optional - make sure yours is eggless).</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="chinese">
            <img src="images/gobmunch.jpg" alt="Butter Roti">
            <h3>Gobi Manchurian Gravy</h3>
            <p>Cauliflower florets fried until crisp, then dipped in a thick, spicy, and tangy Manchurian gravy. Excellent with Fried Rice.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/vegbir.jpg" alt="Butter Roti">
            <h3>Vegetable Biryani</h3>
            <p>Aromatic basmati rice layered with mixed vegetables and potent spices, slow-cooked in the traditional 'dum' style. Served with Raita.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/sfryrice.jpg" alt="Butter Roti">
            <h3>Schezwan Fried Rice</h3>
            <p>Wok-tossed rice with finely chopped vegetables and a generous dash of spicy, flavourful Schezwan sauce. A fiery treat.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/panpula.jpg" alt="Butter Roti">
            <h3>Paneer Pulao</h3>
            <p>Fragrant basmati rice lightly tossed with paneer cubes, green peas, and mild spices. A rich and subtly spiced rice preparation.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/veghakka.jpg" alt="Butter Roti">
            <h3>Vegetable Hakka Noodles</h3>
            <p>Classic stir-fried noodles tossed with cabbage, carrots, capsicum, and savory Chinese sauces in a hot wok. Simple and delicious.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/garlicrice.jpg" alt="Butter Roti">
            <h3>Burnt Garlic Fried Rice</h3>
            <p>Rice stir-fried with burnt garlic, spring onions, and oriental spices. Gives a beautiful, smoky, caramelized garlic aroma.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/singanoodle.jpg" alt="Butter Roti">
            <h3>Veg Singapore Noodles</h3>
            <p>Thin rice noodles stir-fried with curry powder, bean sprouts, and bell peppers, giving a subtle yellow hue and slightly sweet taste.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/curdrice.jpg" alt="Butter Roti">
            <h3>Curd Rice (Dahi Bhaat)</h3>
            <p>Soft-cooked rice mixed with creamy yogurt, tempered with mustard seeds, curry leaves, and green chilies. A soothing South Indian classic.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="rice-noodle">
            <img src="images/jirarice.jpg" alt="Butter Roti">
            <h3>Jeera Rice</h3>
            <p>Basmati rice lightly tossed with roasted cumin seeds and a touch of ghee. Simple, aromatic, and the perfect side for any curry.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/tandplat.jpg" alt="Butter Roti">
            <h3>Tandoori Platter (Veg)</h3>
            <p>An assortment of Tandoori appetizers: Paneer Tikka, Veg Seekh Kebab, and Mushroom Tikka. Served with mint chutney.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/pantikka.jpg" alt="Butter Roti">
            <h3>Paneer Tikka</h3>
            <p>Marinated paneer cubes skewered with bell peppers and onions, grilled to perfection in a traditional Tandoor. Smoky and tender.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/samosa.jpg" alt="Butter Roti">
            <h3>Samosa (2 pcs)</h3>
            <p>Crispy pastry pockets filled with spiced potatoes and peas. A timeless Indian snack, served with tamarind and mint chutney.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/seekhkabab.jpg" alt="Butter Roti">
            <h3>Veg Seekh Kebab</h3>
            <p>Minced vegetables and paneer, blended with spices, skewered, and roasted in the Tandoor. Soft texture with a smoky flavour.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/frenchfry.jpg" alt="Butter Roti">
            <h3>French Fries (Peri Peri)</h3>
            <p>Crispy golden potato strips seasoned with a zesty and spicy Peri Peri masala. A fiery twist on a classic snack.</p>
            <span class="price">₹30</span>ge
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/harakabab.jpg" alt="Butter Roti">
            <h3>Hara Bhara Kebab</h3>
            <p>Shallow-fried patties made from spinach, peas, and potatoes, mildly spiced and often served with a cashew in the center.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/chilip.jpg" alt="Butter Roti">
            <h3>Honey Chilli Potato</h3>
            <p>Deep-fried crispy fritters made from sliced onions coated in a spiced gram flour batter. Perfect rainy-day snack.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="starter">
            <img src="images/pavbhaji.jpg" alt="Butter Roti">
            <h3>Pav Bhaji</h3>
            <p>Mashed mixed vegetables cooked in a spicy tomato gravy (Bhaji), served piping hot with butter-toasted bread rolls (Pav).</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/gnaan.jpg" alt="Butter Roti">
            <h3>Garlic Naan</h3>
            <p>Soft, leavened flatbread baked in the Tandoor, generously brushed with butter and finely chopped fresh garlic.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/butrnaan.jpg" alt="Butter Roti">
            <h3>Butter Naan</h3>
            <p>Fluffy, leavened flatbread freshly baked in the clay oven (Tandoor), perfectly soft and coated with melted butter.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/lachapar.jpg" alt="Butter Roti">
            <h3>Lachha Paratha</h3>
            <p>Multi-layered whole wheat bread, flaked and shallow-fried. Its flaky texture pairs beautifully with any gravy.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/tandoorroti.jpg" alt="Butter Roti">
            <h3>Tandoori Roti</h3>
            <p>Simple, whole wheat flatbread, baked crisp in the Tandoor. A healthy and traditional accompaniment to curries.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/greensalad.jpg" alt="Butter Roti">
            <h3>Green Salad</h3>
            <p>A refreshing mix of freshly sliced cucumbers, carrots, tomatoes, and onions, served with a lemon wedge and light seasoning.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/papad.jpg" alt="Butter Roti">
            <h3>Masala Papad</h3>
            <p>Crispy roasted lentil cracker (papad), topped with a crunchy mixture of chopped onions, tomatoes, coriander, and spices.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/raita.jpg" alt="Butter Roti">
            <h3>Mix Raita</h3>
            <p>Creamy plain yogurt whisked and mixed with finely chopped cucumber, tomato, and onion, seasoned with roasted cumin and salt.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="indian-bread">
            <img src="images/onionring.jpg" alt="Butter Roti">
            <h3>Onion Rings</h3>
            <p>Thick-cut, battered onion rings, deep-fried until golden and crispy. Served with a tangy dipping sauce.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="beverage">
            <img src="images/limesoda.jpg" alt="Butter Roti">
            <h3>Fresh Lime Soda</h3>
            <p>A refreshing mix of fresh lime juice with club soda, served chilled. You can choose it sweet, salty, or mixed. A perfect thirst quencher.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="beverage">
            <img src="images/chaas.jpg" alt="Butter Roti">
            <h3>Masala Chaas (Buttermilk)</h3>
            <p>Traditional spiced buttermilk churned to perfection, flavoured with roasted cumin, mint, and rock salt. Great for digestion.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
        </div>
        
        <div class="menu-item" data-category="beverage">
            <img src="images/wmelonjuice.jpg" alt="Butter Roti">
            <h3>Watermelon Cooler</h3>
            <p>Cooler   A cool, revitalizing drink made from fresh watermelon juice, a hint of mint, and a dash of black salt. Naturally sweet and hydrating.</p>
            <span class="price">₹30</span>
            <a href="order.php?dish=Butter Roti" class="btn btn-success order-btn">Order Now</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById('menuSearch');
    const filterSelect = document.getElementById('menuFilter');
    // Important: Yeh line saare menu items ko pakadti hai
    const menuItems = document.querySelectorAll('.menu-item'); 

    // Main filtering logic function
    function filterMenu() {
        const searchText = searchInput.value.toLowerCase();
        const selectedCategory = filterSelect.value;

        menuItems.forEach(item => {
            // Dish ka naam h3 tag se pakadta hai
            const dishName = item.querySelector('h3').textContent.toLowerCase();
            // Category ko data-category attribute se read karta hai
            const itemCategory = item.getAttribute('data-category');
            
            // Check karta hai ki search aur category dono match ho rahe hain ya nahi
            const matchesSearch = dishName.includes(searchText);
            const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;

            if (matchesSearch && matchesCategory) {
                item.style.display = 'block'; // Item dikhao
            } else {
                item.style.display = 'none'; // Item chhupao
            }
        });
    }

    // Key press aur dropdown change hone par filterMenu chalao
    searchInput.addEventListener('keyup', filterMenu);
    filterSelect.addEventListener('change', filterMenu);
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
