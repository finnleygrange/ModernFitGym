<?php include("includes/views/header.php"); ?>



<div class="main-container">
    <div class="change-details">
        <h1>Change Details</h1>
        <p>Welcome, <?php echo $_SESSION['firstName']; ?>!</p>

        <form action="includes/update-details.php" method="post">
            <label for="newName">New Name:</label>
            <input type="text" id="newName" name="newName" placeholder="Enter new name" required>
            <br>
            <input type="submit" value="Update Details">
        </form>
    </div>
</div>




<?php include("includes/views/footer.php") ?>