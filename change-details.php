<?php include("includes/check-account.php") ?>
<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<?php 
    include ("php/config.php");
    if (isset($_POST["newName"])) {
        $newName = $_POST["newName"];
        $userEmail = $_SESSION["email"];
        $query = "UPDATE users SET Name = '".$newName."' WHERE Email = '".$userEmail."'";
        $command = mysqli_query($con, $query);
        $_SESSION["userName"] = $newName;
        header("Refresh:0");
}
?>

<div class="change-details">
    <h1>Change Details</h1>
    <p>Welcome, <?php echo $userName; ?>!</p>

    <form action="" method="post">
        <label for="newName">New Name:</label>
        <input type="text" id="newName" name="newName" placeholder="Enter new name" required>
        <br>

        <!-- Add more fields as needed -->

        <input type="submit" value="Update Details">
    </form>
</div>

<?php include("includes/footer.php") ?>