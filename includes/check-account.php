<?php
session_start();

if (isset($_SESSION['loggedIn'])) {
    $userName = isset($_SESSION['userName']) ? $_SESSION['userName'] : "";
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
} else {
    echo "<script>alert('You are not logged in. Redirecting to homepage.'); window.location.href = 'index.php';</script>";
    exit();
}
?>