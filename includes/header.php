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
            <li><a href="services.php">Services</a></li>
            <li><a href="contact-us.php">Contact</a></li>

            <?php 
                if ($loggedIn) {
                    echo '<li>|</li>';
                    echo '<li><a href="member-dashboard.php">Dashboard</a></li>';
                    echo '<li><a href="includes/logout.php">Logout</a></li>';
                    echo '<li><a href="profile.php"><i class="fa-regular fa-user fa-xl" style="color: #6494ed;"></i></a></li>';
                } 
                else {
                    echo '<li>|</li>';
                    echo '<li><a href="login.php"><i class="fa-regular fa-user fa-xl" style="color: #6494ed;"></i></a></li>';
                }
            ?>
        </ul>
    </div>
</div>