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

<div class="centre">
    <h1>Dashboard</h1>
    <h3>Welcome to the dashboard! <?php echo $userName ?> </h3>
    <div class="options">
        <p>Please select from the options listed below:</p>
        <h2 class="option"><a href="member-area.php">Pin</a></h2>
        <h2 class="option"><a href="dashboard.php">Schedule</a></h2>
        <h2 class="option"><a href="nutritional-information.php">Nutrition</a></h2>
    </div>

</div>

<?php include("includes/footer.php") ?>