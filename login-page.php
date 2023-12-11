<?php include("includes/views/header.php"); ?>
<div class="main-container">
    <section class="form-container">
        <form action="includes/login.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Login to your account</h2>
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <input type="password" name="pinNumber" id="pinNumber" placeholder="PIN" required>
                <p class="forgot-pinNumber"><a href="#">Forgot PIN?</a></p>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" id="submit">
            </div>
            <div class="form-group">
                <p class="register-here">Don't have an account? <a href="register-page.php">Register here</a></p>
            </div>
        </form>
    </section>
</div>