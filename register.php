<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<?php
include ("php/config.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                <p>This email has already been used.</p>
              </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
    } else {
        mysqli_query($con, "INSERT INTO users(Email, Name, Password) VALUES('$email','$name','$password')") or die("Error");

        echo "<div class='message'>
                <p>Registration Successful!.</p>
              </div> <br>";
        echo "<script>setTimeout(function(){ window.location.href = 'login.php'; }, 2000);</script>";
    }
} else {

?>

<div class="main-container">
    <div class="form-container">
        <form action="">
            <div class="form-group">
                <h2 class="form-title">Create a new account</h2>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Type your email" required>
            </div>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Type your full name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Type your password" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirm your password"
                    required>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" id="register">
            </div>
            <div class="form-group">
                <p class="login-here">Already have an account? <a href="login.php">Login Here</a></p>
            </div>
        </form>
    </div>

</div>
<?php } ?>

<?php include("includes/footer.php") ?>