<?php
session_start();

// Replace this with proper user authentication logic
$valid_username = 'student';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect to the dashboard after successful login
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

