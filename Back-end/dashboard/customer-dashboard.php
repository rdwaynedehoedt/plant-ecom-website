<?php
session_start();
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
            <a href="/PLANT-ECOM-WEBSITE/Front-end/index.php" class="nav__logo">
                <i class="ri-leaf-line nav__logo-icon"></i> PlantPedia
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Oder History</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Favourite</a></li>

                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <?php if(isset($_SESSION['user_id'])): ?>
        <!-- Display user profile or logout if logged in -->
        <a href="/PLANT-ECOM-WEBSITE/Back-end/auth/logout.php" class="Login_button--flex">
            Logout <i class="ri-logout-box-r-line button__icon"></i>
        </a>
        <a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer-dashboard/dashboard.php" class="Login_button--flex">
            Profile <i class="ri-user-3-line button__icon"></i>
        </a>
    <?php else: ?>
        <!-- Show login button if not logged in -->
        <a href="login.php" class="Login_button--flex">
            Login <i class="ri-login-box-line button__icon"></i>
        </a>
    <?php endif; ?>
        </nav>
    </header>

    <!-- Add your site or application content here -->
    <p>Hello! This is your homepage after login.</p>
</body>
</html>
