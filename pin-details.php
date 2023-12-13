<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="member-area">
        <h2>Hi, <?php echo $_SESSION['firstName']; ?></h2>
        <p>Tap the icon to view your PIN</p>
        <div class="pin-container">
            <i class="fa-solid fa-eye-slash eye" onclick="togglePin()"></i>
            <input type="password" value="<?php echo $_SESSION['pinNumber']; ?>" name="pinNumber" id="pinNumber"
                readonly>
            <p class="forgot-pin" onclick="">Forgot pin? Get a new one here!</p>

        </div>
    </div>
</div>

<?php include("includes/views/footer.php") ?>