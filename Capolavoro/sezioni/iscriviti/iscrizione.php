<?php
session_start();
    require 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        $repeat_password = ($_POST['repeat_password']);
        # Check if email or nickname already exists

        // Validate form data
        if ($password != $repeat_password) {
            header("Location: iscrizione.html?error=4"); 
            exit();
        }

        $stmt = $conn->prepare("SELECT * FROM account WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: register.php?error=email already exist");
            exit();
        }
     // Combine the password and hash the result
        $hashed_password = hash('sha3-512', $password); 
        
        $stmt = $conn->prepare("INSERT INTO account (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);
        $stmt->execute(); 

        $_SESSION['email'] = $email;
        header("Location: ../login/login.html");
    }
?>