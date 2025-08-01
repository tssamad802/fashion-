<?php
session_start();
if (!isset($_SESSION['id']) && $_SESSION['username']) {
    header('Location: ./login.php');
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion | E Commerce</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- navbar alert -->
    <div class="nav-alert">
        <span style="color: #0431d4; margin-right: 2px;">Sign up</span>
        & get one art <span style="color: #0431d4; margin-right: 0px; margin-left: 3px;">Free Download price</span> ,
        Shop more...
    </div>

    <!-- navbar -->
     <nav id="navbar">
        <div class="navbar-logo">
            <span style="color: #0431d4; margin-right: 5px;">Design</span>
            <span style="color: #ffa3da;">Birds</span>
        </div>
        <div class="navbar-menus">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="index.php#categories">Categories</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-actions">
            <div class="search-container">
                <input type="text" placeholder="Search products..." class="search-input">
                <i class="fa-solid fa-search search-icon"></i>
            </div>
            <div class="cart-icon">
                <i class="fa-solid fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
            <a href="connect-wallet.php" class="connect-wallet">Connect Wallet <i class="fa-solid fa-wallet"></i></a>
            <i class="fa-solid fa-bars fa-xl mobile-menu"></i>
        </div>
     </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Discover Amazing Fashion</h1>
            <p>Explore our curated collection of trendy clothing, accessories, and lifestyle products</p>
            <div class="hero-buttons">
                <a href="products.php" class="btn-primary">Shop Now</a>
                <button class="btn-secondary">View Categories</button>
            </div>
        </div>
        <div class="hero-image">
            <img src="images/Rectangle 70.png" alt="Fashion Collection">
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories" id="categories">
        <div class="container">
            <h2>Shop by Category</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="images/Rectangle 67.png" alt="Women's Fashion">
                    <h3>Women's Fashion</h3>
                    <p>Trendy clothing and accessories</p>
                </div>
                <div class="category-card">
                    <img src="images/Rectangle 68.png" alt="Men's Fashion">
                    <h3>Men's Fashion</h3>
                    <p>Stylish apparel for men</p>
                </div>
                <div class="category-card">
                    <img src="images/Rectangle 69.png" alt="Accessories">
                    <h3>Accessories</h3>
                    <p>Jewelry, bags, and more</p>
                </div>
                <div class="category-card">
                    <img src="images/Rectangle 75.png" alt="Footwear">
                    <h3>Footwear</h3>
                    <p>Shoes for every occasion</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products" id="products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <!-- product cards unchanged -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter for the latest fashion trends and exclusive offers</p>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email address">
                    <button class="btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Design Birds</h3>
                    <p>Your one-stop destination for trendy fashion and lifestyle products.</p>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#categories">Categories</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fa-solid fa-phone"></i> +1 (555) 123-4567</p>
                        <p><i class="fa-solid fa-envelope"></i> info@designbirds.com</p>
                        <p><i class="fa-solid fa-location-dot"></i> 123 Fashion St, Style City, SC 12345</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Design Birds. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
const navLinks = document.querySelectorAll('.navbar-menus ul li a');
const current = window.location.pathname.split('/').pop() || 'index.php';
navLinks.forEach(link => {
  const href = link.getAttribute('href');
  if (
    (current === 'index.php' && href.includes('index.php')) ||
    (current === 'products.php' && href.includes('products.php')) ||
    (current === 'about.php' && href.includes('about.php')) ||
    (current === 'contact.php' && href.includes('contact.php')) ||
    (current === 'cart.php' && href.includes('cart.php')) ||
    (current === 'product-details.php' && href.includes('product-details.php'))
  ) {
    link.classList.add('active');
  }
});
const mobileMenu = document.querySelector('.mobile-menu');
const navbarMenus = document.querySelector('.navbar-menus');
mobileMenu.addEventListener('click', () => {
  navbarMenus.classList.toggle('open');
});
</script>
</body>
</html>
<?php
}
?>