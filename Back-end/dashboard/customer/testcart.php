<?php
session_start();
include ('/xampp/htdocs/plant-ecom-website/Back-end/config/db.php');

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add product to the cart
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $product_id = intval($_GET['id']);

    $stm = $mysqli->prepare("SELECT * FROM products WHERE id = ?");
    $stm->bind_param("i", $product_id);
    $stm->execute();
    $result = $stm->get_result();

    if ($result->num_rows === 1) {
        $product = $result->fetch_assoc();

        // Add product to the session cart
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = [
                'id' => $product['id'],
                'name' => htmlspecialchars($product['name']),
                'price' => floatval($product['price']),
                'image_url' => htmlspecialchars($product['image_url']),
                'quantity' => 1
            ];
        }
    }
}

// Remove product from the cart
if (isset($_GET['remove']) && !empty($_GET['remove'])) {
    $product_id = intval($_GET['remove']);
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Calculate totals
$subtotal = 0;
foreach ($_SESSION['cart'] as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}
$shipping_fee = 5.00; // Flat shipping fee
$total = $subtotal + $shipping_fee;
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
        <!-- Navigation code here -->
    </header>

    <main class="main">
        <section class="home2" id="home2">
            <div class="order-history-container">
                <h2>My Cart</h2>
                <ul class="order-list">
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li class="order-item">
                            <img src="<?php echo $item['image_url']; ?>" alt="Product Image" class="product-image">
                            <div class="order-details">
                                <h3><?php echo $item['name']; ?></h3>
                                <p>Price: $<?php echo number_format($item['price'], 2); ?></p>
                                <p>Quantity: <?php echo $item['quantity']; ?></p>
                            </div>
                            <div class="order-status">
                                <a href="/PLANT-ECOM-WEBSITE/Back-end/dashboard/customer/mycart.php?remove=<?php echo $item['id']; ?>" class="status-indicator remove">Remove</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="cart-summary">
                    <div class="summary-item">
                        <span>Subtotal:</span>
                        <span>$<?php echo number_format($subtotal, 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span>Shipping Fee:</span>
                        <span>$<?php echo number_format($shipping_fee, 2); ?></span>
                    </div>
                    <div class="summary-item total">
                        <strong>Total:</strong>
                        <strong>$<?php echo number_format($total, 2); ?></strong>
                    </div>
                </div>
                <div class="button-container">
                    <a href="#" class="button button--flex">Checkout</a>
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
