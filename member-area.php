<?php include("includes/check-account.php") ?>
<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>
<style>
input[type="password"],
input[type="text"] {
    width: 100%;
    height: 1.5rem;
    border-radius: 0;
    border: none;
    background: none;
    letter-spacing: 0.5rem;
    font-size: 1.5rem;
    color: #dde6ed;
}

.pin-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 1rem;
}

.pin-container i {
    margin-right: 1rem;
}
</style>

<div class="main-container">
    <div class="member-area">
        <h2>Hi, <?php echo $_SESSION['userName']; ?></h2>
        <p>Tap the icon to view your PIN</p>
        <div class="pin-container">
            <i class="fa-solid fa-eye-slash eye" onclick="togglePin()"></i>
            <input type="password" value="<?php echo $_SESSION['pin']; ?>" name="pin" id="pinInput" readonly user>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>