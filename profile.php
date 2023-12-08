<?php include("includes/check-account.php") ?>
<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<?php 

?>

<div class="main-container">
    <div class='profile-container'>
        <div class='profile-info centre'>
            <?php 
                echo "<h2>$userName</h2>";
                echo "<p>$email</p>";
            ?>
            <a href="change-details.php" style='color: #DDF2FD; text-decoration: underline;'>Edit Info</a>
        </div>
        <div class='centre'>
            <img class='profile-image' id="preview-image" src="images/blank-profile-picture.png" alt="">
        </div>
        <div class='profile-options'>
            <form action="pfp-upload.php" method="post" enctype="multipart/form-data">
                <?php if(isset($_SESSION['profilePicture'])) {$pfp = $_SESSION["profilePicture"]; echo "<img src=$pfp>";} ?>
                <input type="file" name="file" id="file" accept="image/*" onchange="previewImage()">
                <div class="image-submit">
                    <label class="upload-image centre" for="file">Choose a photo</label>
                    <input type="submit" name="submit">
                    <?php if(isset($_SESSION['errorMsg'])){$error_Msg = $_SESSION["errorMsg"]; echo"<script>alert('$error_Msg')</script>";} unset($_SESSION['errorMsg']) ?>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>