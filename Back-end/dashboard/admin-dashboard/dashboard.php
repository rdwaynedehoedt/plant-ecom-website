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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/Front-end/assets/css/styles.css"> <!-- Path to your CSS file -->
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="user_management.php">Manage Users</a></li>
                <li><a href="reports.php">View Reports</a></li>
                <li><a href="site_settings.php">Site Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Welcome, <?php echo $_SESSION['email']; ?>!</h2>
            <p>This is your admin panel where you can manage the application settings, users, and view system reports.</p>
        </section>
        <section>
            <h3>Quick Actions</h3>
            <button onclick="location.href='add_user.php'">Add New User</button>
            <button onclick="location.href='generate_report.php'">Generate Report</button>
        </section>
    </main>
    <footer>
        <p>Copyright © 2024 All rights reserved.</p>
    </footer>

    <script src="path/to/your/js/script.js"></script> <!-- Path to your JS file -->
</body>
</html>
