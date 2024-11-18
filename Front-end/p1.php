<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/PLANT-ECOM-WEBSITE/Front-end/assets/css/styles.css">
    <title>PlantPedia</title>
    <style>
        /* Compact Product Detail Section */
        .product-detail {
            padding: 3rem 1rem;
            max-width: 800px;
            margin: 6rem auto;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .product-detail__header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .product-detail__title {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .product-detail__content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .product-detail__image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-detail__image img {
            width: 100%;
            max-width: 250px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .product-detail__info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-price {
            font-size: 20px;
            color: #4caf50;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .product-description {
            font-size: 14px;
            color: #555;
            margin-bottom: 1rem;
        }

        .product-specs {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }

        .product-specs li {
            font-size: 14px;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .product-detail__actions {
            display: flex;
            gap: 10px;
        }

        .small-button {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button--primary {
            background-color: #ff9800;
            color: #fff;
        }

        .button--secondary {
            background-color: #4caf50;
            color: #fff;
        }

        .button--tertiary {
            background-color: #e91e63;
            color: #fff;
        }

        .button--primary:hover {
            background-color: #e68900;
        }

        .button--secondary:hover {
            background-color: #388e3c;
        }

        .button--tertiary:hover {
            background-color: #d81b60;
        }

        @media (max-width: 768px) {
            .product-detail__content {
                grid-template-columns: 1fr;
            }

            .product-detail__actions {
                flex-direction: column;
            }

            .small-button {
                flex: none;
                margin-bottom: 10px;
            }
        }
    </style>
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
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/about.php" class="nav__link">About</a></li>
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/products.php" class="nav__link">Products</a></li>
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/contact.php" class="nav__link">Contact Us</a></li>
            </ul>
        </div>

        <div class="nav__btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>

        <div class="nav__btns">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/PLANT-ECOM-WEBSITE/Back-end/auth/logout.php" class="Login_button--flex">Logout <i class="ri-logout-box-r-line"></i></a>
                <a href="profile.php" class="Login_button--flex">Profile <i class="ri-user-3-line"></i></a>
            <?php else: ?>
                <a href="login.php" class="Login_button--flex">Login <i class="ri-login-box-line"></i></a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<section class="product-detail container">
    <div class="product-detail__header">
        <h1 class="product-detail__title">Mini Cactus</h1>
    </div>

    <div class="product-detail__content">
        <div class="product-detail__image">
            <img src="assets/img/product1.png" alt="Mini Cactus Image">
        </div>

        <div class="product-detail__info">
            <p class="product-price">$10.99</p>
            <p class="product-description">
                This cute mini cactus is a great addition to your desk. It requires minimal care and adds a touch of greenery to your space. Perfect for beginners.
            </p>
            <ul class="product-specs">
                <li><strong>Type:</strong> Succulent</li>
                <li><strong>Size:</strong> 4 inches</li>
                <li><strong>Watering:</strong> Once a week</li>
                <li><strong>Light:</strong> Bright, indirect sunlight</li>
            </ul>
            <div class="product-detail__actions">
                <button class="button button--flex ">Buy Now</button>
                <button class="button button--flex"><i class="ri-shopping-cart-line"></i> Add to Cart</button>
                <button class="button button--flex"><i class="ri-heart-line"></i> Favourites</button>
            </div>
        </div>
    </div>
</section>

<footer class="footer section">
    <p class="footer__copy">&#169; DwayneFX 2024. All rights reserved</p>
</footer>

<script src="assets/js/main.js"></script>
</body>

</html>
