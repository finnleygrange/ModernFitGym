<?php 
include("includes/views/header.php"); 
?>
<div class="main-container">
    <div class="dashboard">
        <h1>Welcome to the dashboard <?php echo $_SESSION['firstName']; ?>!</h1>
        <div class="options">
            <p>Please select from the options listed below:</p>
            <ul>
                <li>
                    <a href="pin-details.php">Pin</a>
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

</html>