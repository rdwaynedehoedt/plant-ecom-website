<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/PLANT-ECOM-WEBSITE/Front-end/assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/styles.css">
<link rel="stylesheet" href="/PLANT-ECOM-WEBSITE/Front-end/assets/css/styles.css">

    <title>Oder History - PlantPedia</title>

</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/PLANT-ECOM-WEBSITE/Front-end/index.php" class="nav__logo">
                <i class="ri-leaf-line nav__logo-icon"></i> PlantPedia
            </a>

            <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/customer-dashboard.php" class="nav__link">Profile</a></li>
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/oder-history.php" class="nav__link">Order History</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Favourites</a></li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <i class="ri-moon-line change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>

            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="/PLANT-ECOM-WEBSITE/Back-end/auth/logout.php" class="Login_button--flex">
                    Logout <i class="ri-logout-box-r-line button__icon"></i>
                </a>
            <?php else: ?>
                <a href="login.php" class="Login_button--flex">
                    Login <i class="ri-login-box-line button__icon"></i>
                </a>
            <?php endif; ?>
        </nav>
    </header>


    
    <main class="main">
    <section class="home2" id="home2">
    <div class="order-history-container">
    <h2>Order History</h2>
    <ul class="order-list">
        <li class="order-item">
            <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/product1.png" alt="Product Image" class="product-image">
            <div class="order-details">
                <h3>Mini Cactus</h3>
                <p>$10.99</p>
                <p>A cute mini cactus for your desk.</p>
            </div>
            <div class="order-status">
                <span class="timeline-icon"><i class="ri-shopping-cart-line"></i></span>
                <span class="status-indicator order-placed">Order Placed</span>
                <span class="timeline-date">Nov 15, 2024</span>
            </div>
        </li>
        <li class="order-item">
            <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/product2.png" alt="Product Image" class="product-image">
            <div class="order-details">
                <h3>Fiddle Leaf Fig</h3>
                <p>$25.99</p>
                <p>Perfect for adding greenery to your room.</p>
            </div>
            <div class="order-status">
                <span class="timeline-icon"><i class="ri-truck-line"></i></span>
                <span class="status-indicator shipping">Shipping</span>
                <span class="timeline-date">Nov 16, 2024</span>
            </div>
        </li>

        <li class="order-item">
            <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/product3.png" alt="Product Image" class="product-image">
            <div class="order-details">
                <h3>Snake Plant</h3>
                <p>$19.99</p>
                <p>Low-maintenance indoor plant.</p>
            </div>
            <div class="order-status">
                <span class="timeline-icon"><i class="ri-map-pin-line"></i></span>
                <span class="status-indicator out-for-delivery">Out for Delivery</span>
                <span class="timeline-date">Nov 17, 2024</span>
            </div>
        </li>

        <li class="order-item">
            <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/product4.png" alt="Product Image" class="product-image">
            <div class="order-details">
                <h3>Monstera Deliciosa</h3>
                <p>$29.99</p>
                <p>A statement piece for your living room.</p>
            </div>
            <div class="order-status">
                <span class="timeline-icon"><i class="ri-check-line"></i></span>
                <span class="status-indicator delivered">Delivered</span>
                <span class="timeline-date">Nov 18, 2024</span>
            </div>
        </li>
    </ul>
</div>


    </section>
    </main>
        <p class="footer__copy">&#169; DwayneFX 2024. All rigths reserved</p>
      <!--=============== SCROLL UP ===============-->
      <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/main.js"></script>
</body>
</html>
