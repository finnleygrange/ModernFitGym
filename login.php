<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<div class="main-container">
    <form action="">
        <div class=form-group>
            <h2 class="form-title">Login to your account</h2>
        </div>
        <div class=form-group>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div class=form-group>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <p class="forgot-password"><a href="forgot-password.php">Forgot password?</a></p>
        </div>
        <div class=form-group>
            <input type="submit" value="Login" id="login">
        </div>
    </form>
    <div class=form-group>
        <p class="register-here">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</div>
<?php include("includes/footer.php") ?>