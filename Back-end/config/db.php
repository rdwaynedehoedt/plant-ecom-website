<?php
session_start(); // Start the session to store user data after login

// Include the database connection
include('../config/db.php');  // This includes the db.php file we just created

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data from POST method
    $email = $_POST['email'];   // Fetch the email entered by the user
    $password = $_POST['password'];  // Fetch the password entered by the user

    // Validate form inputs (basic validation for now)
    if (!empty($email) && !empty($password)) {
        // Prepare a SQL statement to check if the user exists in the database
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);  // Bind the user-entered email
        $stmt->execute();  // Execute the query
        $result = $stmt->get_result();  // Get the result of the query

        // If a user is found with the entered email
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();  // Fetch the user's data from the database

            // Verify if the password matches the hashed password in the database
            if (password_verify($password, $user['password'])) {
                // Set session variables for the logged-in user
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect to the dashboard (e.g., customer_dashboard or shop_owner_dashboard)
                header("Location: ../dashboard/customer_dashboard.php"); // Update this if needed
                exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found with that email!";
        }
    } else {
        echo "Please fill in all fields!";
    }
}
?>
