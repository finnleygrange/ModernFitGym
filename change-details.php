<?php include("includes/check-account.php") ?>
<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<h1>Change Details</h1>
<p>Welcome, <?php echo $userName; ?>!</p>

<h2>Change Details:</h2>
<form action="update-details.php" method="post">
    <label for="newName">New Name:</label>
    <input type="text" id="newName" name="newName" placeholder="Enter new name" required>
    <br>

    <!-- Add more fields as needed -->

    <input type="submit" value="Update Details">
</form>

<p><a href="logout.php">Logout</a></p>

<?php include("includes/footer.php") ?>