<?php
session_start();
require 'connection1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = strip_tags($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM account WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();

    if($user){
        $salt = $user->salt;
        $pass_hash= hash('sha3-512', $password.$salt);
        if($pass_hash == $user->password){
            $_SESSION['user_id'] = $user->id;
            header("Location: ../../myarea/myareahome.php");
        } else {
            header("Location: login.html?error=4"); 
        }
    }
    exit();
}
?>
