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
    <title>User Profile - PlantPedia</title>
    <link rel="stylesheet" href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/style.css">
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
                    <li class="nav__item"><a href="#" class="nav__link">Order History</a></li>
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

        <aside class="profile-card">
            <header>
                    <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/Profile icon.png" alt="User Avatar" class="profile-avatar">
                <h1>Test User</h1>
                <h2>customer</h2>
            </header>
            <div class="profile-bio">
                <p>Passionate about plants and dedicated to bringing nature closer to you. Let's grow together!</p>
            </div>
            <ul class="profile-social-links">
                <li><a target="_blank" href="#"><i class="ri-facebook-fill"></i></a></li>
                <li><a target="_blank" href="#"><i class="ri-twitter-fill"></i></a></li>
                <li><a target="_blank" href="#"><i class="ri-github-fill"></i></a></li>
                <li><a target="_blank" href="#"><i class="ri-instagram-fill"></i></a></li>
            </ul>
        </aside>

    </section>
    </main>

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
