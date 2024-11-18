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
                <!-- Theme change button -->
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

    <section class="contact section container" id="contact">
        <div class="contact__box">
            <h2 class="section__title-center">
                Contact Us
            </h2>
            <br>
        </div>

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
                            +94 77 218 6241
                        </span>
                    </div>

                    <div class="contact__information">
                        <h3 class="contact__subtitle">Write us by mail</h3>
                        <span class="contact__description">
                            <i class="ri-mail-line contact__icon"></i>
                            dwaynedehoedt.rosch@gmail.com
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
        <div class="contact__box">
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8143223604848!2d79.84806807451206!3d6.912791318518082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25960d4668fff%3A0xf07c01bc93e0f1ac!2sSLIIT%20CITY%20UNI!5e0!3m2!1sen!2slk!4v1729400569412!5m2!1sen!2slk"
                width="600" height="450" style="border:0; display: block; margin: 0 auto;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    </main>

    <!--==================== FOOTER ====================-->
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


    <script src="/Front-end/assets/js/main.js"></script>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</body>

</html>