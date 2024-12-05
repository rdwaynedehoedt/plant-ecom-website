<?php
session_start();

include('/xampp/htdocs/plant-ecom-website/Back-end/config/db.php');

$stm = $mysqli->prepare("SELECT * FROM products");
$stm->execute();
$result = $stm->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
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
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/about.php" class="nav__link">About</a></li>
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/products.php" class="nav__link">Products</a></li>
                <li class="nav__item"><a href="/PLANT-ECOM-WEBSITE/Front-end/contact.php" class="nav__link">Contact Us</a></li>
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
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/PLANT-ECOM-WEBSITE/Back-end/auth/logout.php" class="Login_button--flex">
                    Logout <i class="ri-logout-box-r-line button__icon"></i>
                </a>
                <?php if ($_SESSION['role'] == 'admin'): ?>
                    <a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/admin/admin-dashboard.php" class="Login_button--flex">
                        Dashboard <i class="ri-dashboard-line button__icon"></i>
                    </a>
                <?php elseif ($_SESSION['role'] == 'customer'): ?>
                    <a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/customer-dashboard.php" class="Login_button--flex">
                        Profile <i class="ri-user-3-line button__icon"></i>
                    </a>
                <?php endif; ?>
            <?php else: ?>
                <a href="login.php" class="Login_button--flex">
                    Login <i class="ri-login-box-line button__icon"></i>
                </a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<section class="product section container" id="products">
    <h2 class="section__title-center">
        Check out our <br> products
    </h2>

    <p class="product__description">
        Here are some selected plants from our showroom, all are in excellent shape and have a long life span. Buy and enjoy the best quality.
    </p>

    <div class="product__container grid">
        <?php foreach ($products as $product): ?>
            <article class="product__card">
                <a href="product.php?id=<?php echo $product['id']; ?>">
                <div class="product__circle"></div>

                <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product__img">

                <h3 class="product__title"><?php echo htmlspecialchars($product['name']); ?></h3>
                <span class="product__price">$<?php echo number_format($product['price'], 2); ?></span>

                <a href="#" class="button--flex product__button">
                    <i class="ri-shopping-bag-line"></i>
                </a>
        </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<footer class="footer section">
    <!-- Footer content here -->
</footer>

<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
