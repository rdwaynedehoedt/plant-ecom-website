


<?php
session_start();

include('/xampp/htdocs/plant-ecom-website/Back-end/config/db.php');

$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute();
$result = $stmt->get_result();
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
            </div>
            <div class="nav__btns">
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

    <main class="main">
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="assets/img/home.png" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        Plants will make <br> your life better
                    </h1>
                    <p class="home__description">
                        Bring fresh, vibrant plant designs to your office or apartment. Add a touch of greenery to
                        inspire your new ideas!
                    </p>
                    <a href="#" class="button button--flex">
                        Explore <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>

                    <div class="home__social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="steps section container">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Steps to start your <br> plants off right
                </h2>

                <div class="steps__container grid">
                    <div class="steps__card">
                        <div class="steps__card-number">01</div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">02</div>
                        <h3 class="steps__card-title">Place an order</h3>
                        <p class="steps__card-description">
                            Once your order is set, we move to the next step which is the shipping.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">03</div>
                        <h3 class="steps__card-title">Get plants delivered</h3>
                        <p class="steps__card-description">
                            Our delivery process is easy, you receive the plant direct to your door.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="product section container" id="products">
            <h2 class="section__title-center">
                Check out our <br> products
            </h2>

            <p class="product__description">
                Here are some selected plants from our showroom, all are in excellent
                shape and has a long life span. Buy and enjoy best quality.
            </p>

            <div class="product__container grid">
                <?php foreach($products as $product): ?>
                    <article class="product__card">
                        <a href="product.php ?id=<?php echo $product['id']; ?>">
                        <div class="product__circle"></div>
                            <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product__img">
                            <h3 class="product__title"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <span class="product__price"><?php echo number_format($product['price'], 2); ?> LKR</span>
                            <a href="#" class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                            </a>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Some common questions <br> were often asked
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                My flowers are falling off or dying?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes leaves to become pale?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes brown crispy leaves?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do i choose a plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do I change the pots?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Why are gnats flying around my plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact section container" id="contact">
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Reach out to us today <br> via any of the given <br> information
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Call us for instant support</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                +999 888 777
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Write us by mail</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                user@email.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Email</label>
                        </div>
                        
                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Subject</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>
                            <label for="" class="contact__label">Message</label>
                        </div>
                    </div>

                    <button class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> PlantPedia
                </a>

                <h3 class="footer__title">
                    Subscribe to our newsletter <br> to stay update
                </h3>

                <div class="footer__subscribe">
                    <input type="email" placeholder="Enter your email" class="footer__input">

                    <button class="button button--flex footer__button">
                        Subscribe
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Address</h3>

                <ul class="footer__data">
                    <li class="footer__information"> No 23 Galle Road</li>
                    <li class="footer__information">Colombo 02</li>
                    <li class="footer__information">Sri Lanka</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information">+94 772186241</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    We accept all credit cards
                </h3>

                <div class="footer__cards">
                    <img src="assets/img/card1.png" alt="" class="footer__card">
                    <img src="assets/img/card2.png" alt="" class="footer__card">
                    <img src="assets/img/card3.png" alt="" class="footer__card">
                    <img src="assets/img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; DwayneFX 2024. All rigths reserved</p>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>


    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>