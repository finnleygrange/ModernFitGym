<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernFitGym</title>
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
                <a href="<?php echo isset($_SESSION["userRole"]) ? 'homepage.php' : 'login-page.php'; ?>">
                    <i class="fa-solid fa-dumbbell fa-bounce fa-lg icon" style="color: #6494ed;"></i>
                    <p>ModernFit Gym</p>
                </a>
            </div>
            <div class="header-right">
                <ul>
                    <?php
                        if (isset($_SESSION["userRole"])) {
                            $userRole = $_SESSION["userRole"];

                            echo '<li><a href="profile.php"><i class="fa-regular fa-user fa-xl icon" style="color: #6494ed;"></i>Profile</a></li>';

                            echo '<li><a href="dashboard.php"><i class="fa-regular fa-chart-bar fa-xl icon" style="color: #6494ed;"></i>';

                            if ($userRole === "member") {
                                echo 'Member Dashboard';
                            } 
                            if ($userRole === "trainer") {
                                echo 'Trainer Dashboard';
                            } 
                            if ($userRole === "admin") {
                                echo 'Admin Dashboard';
                            }
                            echo '</a></li>';

                            echo '<li><a href="includes/logout.php"><i class="fa-solid fa-right-from-bracket fa-xl icon" style="color: #6494ed;"></i>Logout</a></li>';
                        } else {
                            echo '<li><a href="login-page.php"><i class="fa-regular fa-user fa-xl icon" style="color: #6494ed;"></i>Login</a></li>';
                        }
                    ?>
                </ul>
            </div>

        </div>
    </header>