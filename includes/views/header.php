<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Gym Name</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js\script.js" defer></script>
</head>

<body>
    <header>
        <div class="header-main">
            <div class="header-left">
                <a href="homepage.php">
                    <i class="fa-solid fa-dumbbell fa-bounce fa-lg" style="color: #6494ed;"></i>
                    <p>ModernFit Gym</p>
                </a>
            </div>
            <div class="header-right">
                <ul>



                    <?php
                    echo '<li><a href="profile.php"><i class="fa-regular fa-user fa-xl" style="color: #6494ed;"></i></a></li>';

                    if (isset($_SESSION["userRole"])) {
                        $userRole = $_SESSION["userRole"];

                        if ($userRole === "member") {
                            echo '<li><a href="member-dashboard.php">Member Dashboard</a></li>';
                        } 
                        if ($userRole === "trainer") {
                            echo '<li><a href="trainer-dashboard.php">TrainerDashboard</a></li>';
                        } 
                        if ($userRole === "admin") {
                            echo '<li><a href="admin-dashboard.php">Admin Dashboard</a></li>';
                        } 
                    }

                    echo '<li><a href="includes/logout.php">Logout</a></li>';
                    ?>


                </ul>
            </div>
        </div>
    </header>