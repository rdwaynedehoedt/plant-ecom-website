<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header("Location: /PLANT-ECOM-WEBSITE/Front-end/login.html");
exit();
?>
