<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /PLANT-ECOM-WEBSITE/Back-end/auth/login.php");
    exit();
}

include ('/xampp/htdocs/plant-ecom-website/Back-end/config/db.php');

$user_id = $_SESSION['user_id'];
$stm = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stm->bind_param("i", $user_id);
$stm->execute();
$result = $stm->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    $user_id = $user['id'];
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $email = $user['email'];
    $role = $user['role'];
    $about = $user['about'];
} else {
    echo "No user found!";
    exit();
}
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
    <title>User Profile - PlantPedia</title>

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

    <aside class="profile-card">
    <header>
        <img src="/PLANT-ECOM-WEBSITE/Front-end/assets/img/Profile icon.png" alt="User Avatar" class="profile-avatar">
        <h1><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></h1>
        <h2><?php echo htmlspecialchars($role);?></h2>
    </header>
    <div class="profile-bio">
        <p><?php echo htmlspecialchars($about);?></p>
    </div>
    <div>
        <a href = "#" class="button button--flex">Update Profile</a>
    </div>
</aside>


    </section>
    </main>

        <p class="footer__copy">&#169; DwayneFX 2024. All rigths reserved</p>

      <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>
    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/scrollreveal.min.js"></script>
    <script src="/PLANT-ECOM-WEBSITE/Front-end/assets/js/main.js"></script>
</body>
</html>
