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
        </a>http://localhost/PLANT-ECOM-WEBSITE/Front-end/about.php
    <?php endif; ?>
        </nav>
    </header>

    <aside class="profile-card">
        <header>
          <!-- here’s the avatar -->
          <a target="_blank" href="#">
            <img src="http://lorempixel.com/150/150/people/" class="hoverZoomLink">
          </a>
      
          <!-- the username -->
          <h1>
                  John Doe
                </h1>
      
          <!-- and role or location -->
          <h2>
                  Better Visuals
                </h2>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
      
          <p>
            It takes monumental improvement for us to change how we live our lives. Design is the way we access that improvement.
          </p>
      
        </div>
      
        <!-- some social links to show off -->
        <ul class="profile-social-links">
          <li>
            <a target="_blank" href="https://www.facebook.com/creativedonut">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/dropyourbass">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/vipulsaxena">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.behance.net/vipulsaxena">
             
              <i class="fa fa-behance"></i>
            </a>
          </li>
        </ul>
      </aside>


</body>
</html>
