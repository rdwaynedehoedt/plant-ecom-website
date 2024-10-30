<?php
session_start(); // Start the session at the beginning of the script

// Include the database connection file
include('../config/db.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input fields
    if (!empty($email) && !empty($password)) {

        // Prepare an SQL statement to check if the user exists
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // If the user exists
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc(); // Fetch the user data

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start the session and store user data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role']; // Store the user's role

                // Redirect to different dashboards based on user role
                if ($user['role'] === 'admin') {
                    header("Location: /PLANT-ECOM-WEBSITE/Back-end/dashboard/admin_dashboard/dashboard.php"); // Admin dashboard
                    exit();
                } else if ($user['role'] === 'customer') {
                    header("Location: /PLANT-ECOM-WEBSITE/Back-end/dashboard/customer_dashboard/dashboard.php"); // Customer dashboard
                    exit();
                } else {
                    // If the role is neither admin nor customer
                    echo "Access Denied!";
                }
            } else {
                // Password is incorrect
                echo "Invalid password!";
            }
        } else {
            // No user found
            echo "No user found with that email!";
        }
    } else {
        // Email or password field is empty
        echo "Please fill in both email and password!";
    }
} else {
    // Incorrect request method
    echo "Invalid request method!";
}
?>
