<?php
// Include the database connection
include('config/db.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Simple validation to check if fields are empty
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
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                
                // Redirect to a dashboard or home page
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found with that email!";
        }
    } else {
        echo "Please fill in both email and password!";
    }
}
?>
