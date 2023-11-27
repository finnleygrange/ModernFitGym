<?php 
    include ("php/config.php");
    session_start();
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = 'SELECT * FROM users WHERE email = "'.$email.'"';
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $newEmail = $row['Email'];
            $newPass = $row['Password'];

            if ($newEmail == $email && $newPass == $password) {
                setcookie("email",$email,time() + (10 * 365 * 24 *60 * 60));//Will never expire
                $_SESSION['loggedIn'] = true;
                header('Location: homepage.php');
                die();
            }
        }

        echo "<p>The username or password that you entered was incorrect</p>";

    } 
?>

<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<div class="main-container">
    <div class="form-container">
        <form action="" method="post">
            <div class=form-group>
                <h2 class="form-title">Login to your account</h2>
            </div>
            <div class=form-group>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Type your email" required>
            </div>
            <div class=form-group>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Type your password" required>
                <p class="forgot-password"><a href="forgot-password.php">Forgot password?</a></p>
            </div>
            <div class=form-group>
                <input type="submit" value="Login" id="submit">
            </div>
            <div class=form-group>
                <p class=" register-here">Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </form>

    </div>
</div>
<?php include("includes/footer.php") ?>