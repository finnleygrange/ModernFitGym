<?php include("includes/check-account.php") ?>
<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<div class="main-container">
    <div class="member-area">
        <h2>Hi, <?php echo $userName;?></h2>
        <p>Tap the icon to view your PIN</p>
        <div>
            <i class="fa-solid fa-eye-slash" onclick="togglePin()"></i>
            <input type="password" name="" id="pinInput">
        </div>
    </div>
</div>

<script>
function togglePin() {
    var pinInput = document.getElementById("pinInput");


    if (pinInput.type === "password") {
        pinInput.type = "text";
    } else {
        pinInput.type = "password";
    };

}

</script>
<?php include("includes/footer.php") ?>