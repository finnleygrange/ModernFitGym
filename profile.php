<?php include("includes/views/header.php") ?>

<div class="main-container">

    <div class='profile-container'>
        <div class='profile-info centre'>
            <?php 
                echo "<h2>{$_SESSION['firstName']} {$_SESSION['lastName']}</h2>";
                echo "<p>{$_SESSION['email']}</p>";
            ?>
            <a href="change-details.php" style='color: #DDF2FD; text-decoration: underline;'>Edit Info</a>
        </div>
        <div class='centre'>
            <img class='profile-image' id="preview-image" src="images/blank-profile-picture.png" alt="">
        </div>
        <div class='profile-options'>
            <form action="includes/pfp-upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file" accept="image/*" onchange="previewImage()">
                <?php 
                include("includes/config.php");
                if (isset($_SESSION["pfp"])){
                    $files = glob('includes/pfps/*.*');
                    $pfpPath = 'includes/pfps/' . $_SESSION["pfp"];
                    foreach ($files as $file) {
                        if ($file == $pfpPath){
                            echo "<script>document.getElementById('preview-image').setAttribute('src','$pfpPath');</script>";
                        };
                    };
                } else {
                    $userId = $_SESSION["id"];
                    $query = "SELECT * FROM pfps";
                    $result = mysqli_query($con, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row["id"] == $userId) {
                                $_SESSION["pfp"] = $row["pfp"];
                                header("Refresh:0");
                            }
                        }
                    }
                }
                ?>
                <div class="image-submit">
                    <label class="upload-image centre" for="file">Choose a photo</label>
                    <input type="submit" name="submit">
                    <?php if(isset($_SESSION['errorMsg'])){$error_Msg = $_SESSION["errorMsg"]; echo"<script>alert('$error_Msg')</script>";} unset($_SESSION['errorMsg']) ?>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/views/footer.php") ?>