<?php 
    session_start();
    include ('../config/db.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if (!empty($email) && !empty($password)) {
                
            $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc(); 
    
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['role'] = $user['role'];
    
                    if ($user['role'] === 'admin') {
                        header("Location: /PLANT-ECOM-WEBSITE/Back-end/dashboard/admin-dashboard.php"); 
                        exit();
                    } else if ($user['role'] === 'customer') {
                        header("Location: /PLANT-ECOM-WEBSITE/Front-end/index.php"); 
                        exit();
                    } else {
                        echo "Access Denied!";
                    }
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "No user found with that email!";
            }
        } else {
            echo "Please fill in both email and password!";
        }
    } else {
        echo "Invalid request method!";
    }

?>