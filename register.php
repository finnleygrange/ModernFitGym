<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

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

<?php include("includes/footer.php") ?>