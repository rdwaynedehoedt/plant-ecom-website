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

    <title>My Cart - PlantPedia</title>

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
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/mycart.php" class="nav__link">My Cart</a></li>
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
                <h2>My Cart</h2>
                <ul class="order-list">
                    <li class="order-item">
                        <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/product1.png" alt="Product Image" class="product-image">
                        <div class="order-details">
                            <h3>Mini Cactus</h3>
                            <p>$10.99</p>
                        </div>
                        <div class="order-status">
                            <Button class="status-indicator shipping " style="margin-bottom: 8px;">View Item</Button>
                            <Button class="status-indicator remove">-</Button>
                        </div>
                    </li>
                </ul>
                <div class="cart-summary">
                <div class="summary-item">
                    <span>Subtotal:</span>
                    <span>$32.97</span>
                </div>
                <div class="summary-item">
                    <span>Shipping Fee:</span>
                    <span>$5.00</span>
                </div>
                <div class="summary-item total">
                    <strong>Total:</strong>
                    <strong>$37.97</strong>
                </div>
            </div>
            <div class="button-container">
                <a href = "#" class="button button--flex">Checkout</a>
            </div>
            </div>
        </section>
    </main>

    <p class="footer__copy">&#169; DwayneFX 2024. All rights reserved</p>
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/scrollreveal.min.js"></script>
    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/main.js"></script>
</body>
</html>
