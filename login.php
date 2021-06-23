<?php
session_start();

// assoc array
$users = [
    "admin@system.com" => "secret",
    "employee@system.com" => "employee",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // VALIDATION
    if(empty($email) || empty($password)) {
        die("You didnt enter your email although there was front-end validation");
    }

    foreach($users as $key => $value) {
        if($email == $key && $password == $value) {
            $_SESSION['email'] = $key;
            header("Location: profile.php");
        } else {
            echo "Wrong email or password";
        }
    }
}