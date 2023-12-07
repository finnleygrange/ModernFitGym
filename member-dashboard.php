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

<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<div class="main-container">
    <div class="dashboard">
        <h1>Welcome to the dashboard <?php echo $userName ?>!</h1>
        <div class="options">
            <p>Please select from the options listed below:</p>
            <ul>
                <li>
                    <a href="member-area.php">Pin</a>
                </li>
                <li>
                    <a href="dashboard.php">Schedule</a>
                </li>
                <li>
                    <a href="nutritional-information.php">Nutrition</a>
                </li>
            </ul>
        </div>

    </div>
</div>


<?php include("includes/footer.php") ?>