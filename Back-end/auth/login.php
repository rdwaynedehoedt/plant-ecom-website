<?php
    
    session_start(); // Start the session to store user data after login

    include('../config/db.php')

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }//here we will get the user name and the pw in to and arr like extract and stroring wage 

    if(!empty($email) && !empty($password)){
    }
    else
    {
        echo"Please Fill in both email and password fields!"
    }
    
?>