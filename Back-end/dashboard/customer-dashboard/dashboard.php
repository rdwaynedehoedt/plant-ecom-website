<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to login page
    header("Location: /PLANT-ECOM-WEBSITE/Front-end/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/PLANT-ECOM-WEBSITE/Front-end/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/PLANT-ECOM-WEBSITE/Front-end/assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>PlantPedia</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/PLANT-ECOM-WEBSITE/Front-end/index.html" class="nav__logo">
                <i class="ri-leaf-line nav__logo-icon"></i> PlantPedia
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/index.html" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/about.html" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/products.html" class="nav__link">Products</a></li>
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/contact.html" class="nav__link">Contact Us</a></li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__btns">
                <!-- Conditional display, check if user is logged in -->
                <?php if(isset($_SESSION['user_id'])): ?>
                <a href="/PLANT-ECOM-WEBSITE/Front-end/user-profile.html" class="profile-icon">
                    <i class="ri-account-circle-line"></i>
                </a>
                <?php else: ?>
                <a href="login.html" class="Login_button--flex">
                    Login <i class="ri-login-box-line button__icon"></i>
                </a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <!-- Add your site or application content here -->
    <p>Hello! This is your homepage after login.</p>
</body>
</html>
