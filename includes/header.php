<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    $loggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;
?>

<div class="header-main">
    <div class="header-left">
        <a href="index.php">
            <i class="fa-solid fa-dumbbell fa-bounce fa-lg" style="color: #6494ed;"></i>
            <p>ModernFit Gym</p>
        </a>
    </div>
    <div class="header-right">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact-us.php">Contact</a></li>

            <?php 
                if ($loggedIn) {
                    echo '<li>|</li>';
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="includes/logout.php">Logout</a></li>';
                } 
                else {
                    echo '<li>|</li>';
                    echo '<li><a href="login.php">Login</a></li>';
                }
            ?>
        </ul>
    </div>
</div>